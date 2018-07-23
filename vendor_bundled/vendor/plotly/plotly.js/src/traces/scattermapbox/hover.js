/**
* Copyright 2012-2017, Plotly, Inc.
* All rights reserved.
*
* This source code is licensed under the MIT license found in the
* LICENSE file in the root directory of this source tree.
*/


'use strict';

var Fx = require('../../components/fx');
var getTraceColor = require('../scatter/get_trace_color');
var fillHoverText = require('../scatter/fill_hover_text');
var BADNUM = require('../../constants/numerical').BADNUM;

module.exports = function hoverPoints(pointData, xval, yval) {
    var cd = pointData.cd,
        trace = cd[0].trace,
        xa = pointData.xa,
        ya = pointData.ya;

    // compute winding number about [-180, 180] globe
    var winding = (xval >= 0) ?
            Math.floor((xval + 180) / 360) :
            Math.ceil((xval - 180) / 360);

    // shift longitude to [-180, 180] to determine closest point
    var lonShift = winding * 360;
    var xval2 = xval - lonShift;

    function distFn(d) {
        var lonlat = d.lonlat;

        if(lonlat[0] === BADNUM) return Infinity;

        var dx = Math.abs(xa.c2p(lonlat) - xa.c2p([xval2, lonlat[1]]));
        var dy = Math.abs(ya.c2p(lonlat) - ya.c2p([lonlat[0], yval]));
        var rad = Math.max(3, d.mrc || 0);

        return Math.max(Math.sqrt(dx * dx + dy * dy) - rad, 1 - 3 / rad);
    }

    Fx.getClosest(cd, distFn, pointData);

    // skip the rest (for this trace) if we didn't find a close point
    if(pointData.index === false) return;

    var di = cd[pointData.index],
        lonlat = di.lonlat,
        lonlatShifted = [lonlat[0] + lonShift, lonlat[1]];

    // shift labels back to original winded globe
    var xc = xa.c2p(lonlatShifted),
        yc = ya.c2p(lonlatShifted),
        rad = di.mrc || 1;

    pointData.x0 = xc - rad;
    pointData.x1 = xc + rad;
    pointData.y0 = yc - rad;
    pointData.y1 = yc + rad;

    pointData.color = getTraceColor(trace, di);
    pointData.extraText = getExtraText(trace, di);

    return [pointData];
};

function getExtraText(trace, di) {
    var hoverinfo = di.hi || trace.hoverinfo;
    var parts = hoverinfo.split('+');
    var isAll = parts.indexOf('all') !== -1;
    var hasLon = parts.indexOf('lon') !== -1;
    var hasLat = parts.indexOf('lat') !== -1;

    var lonlat = di.lonlat;
    var text = [];

    // TODO should we use a mock axis to format hover?
    // If so, we'll need to make precision be zoom-level dependent
    function format(v) {
        return v + '\u00B0';
    }

    if(isAll || (hasLon && hasLat)) {
        text.push('(' + format(lonlat[0]) + ', ' + format(lonlat[1]) + ')');
    } else if(hasLon) {
        text.push('lon: ' + format(lonlat[0]));
    } else if(hasLat) {
        text.push('lat: ' + format(lonlat[1]));
    }

    if(isAll || parts.indexOf('text') !== -1) {
        fillHoverText(di, trace, text);
    }

    return text.join('<br>');
}
