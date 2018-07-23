{* $Id: xmpp-client.tpl 62217 2017-04-15 15:27:37Z montefuscolo $ *}
<script type="text/javascript">document.addEventListener("DOMContentLoaded", function(){
    var xmpp_service_url = $.service("xmpp", "prebind");

    jQuery("<link>")
        .attr("rel", "stylesheet")
        .attr("href", "vendor_bundled/vendor/jcbrand/converse.js/css/converse.css")
        .appendTo("head");

    function tiki_initialize_conversejs() {
        converse.initialize({
            bosh_service_url: "{$xmpp.server_http_bind}",
            jid: "{$xmpp.user_jid}",
            authentication: "prebind",
            prebind_url: xmpp_service_url,
        });
    }

    jQuery.getScript("vendor_bundled/vendor/jcbrand/converse.js/dist/converse.js")
        .done(tiki_initialize_conversejs);
});
</script>
