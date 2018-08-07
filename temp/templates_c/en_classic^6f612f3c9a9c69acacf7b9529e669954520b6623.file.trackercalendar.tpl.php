<?php /* Smarty version Smarty-3.1.21, created on 2018-08-07 05:23:01
         compiled from "C:\xampp\htdocs\tikiwiki\tiki-18.1\templates\wiki-plugins\trackercalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11657746285b691095825996-63738289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f612f3c9a9c69acacf7b9529e669954520b6623' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikiwiki\\tiki-18.1\\templates\\wiki-plugins\\trackercalendar.tpl',
      1 => 1501997318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11657746285b691095825996-63738289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filters' => 0,
    'trackercalendar' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b69109586fd24_24655641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b69109586fd24_24655641')) {function content_5b69109586fd24_24655641($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'C:/xampp/htdocs/tikiwiki/tiki-18.1/lib/smarty_tiki\\block.jq.php';
?><?php echo $_smarty_tpl->tpl_vars['filters']->value;?>

<div id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['trackercalendar']->value['id']);?>
"></div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	var data = <?php echo json_encode($_smarty_tpl->tpl_vars['trackercalendar']->value);?>
;
	$('#' + data.id).each(function () {
		var cal = this;
		var storeEvent = function(event) {
			var request = {
				itemId: event.id,
				trackerId: data.trackerId
			}, end = event.end;

			if (! end) {
				end = event.start;
			}

			request['fields~' + data.begin] = event.start.getTime() / 1000;
			request['fields~' + data.end] = end.getTime() / 1000;

			$.post($.service('tracker', 'update_item'), request);
		};

		$(this).fullCalendar({
			timeFormat: {
				'': data.timeFormat
			},
			header: {
				left: 'prevYear,prev,next,nextYear today',
				center: 'title',
				right: data.views
			},
			editable: true,
			timezone: '<?php echo $_smarty_tpl->tpl_vars['prefs']->value['server_timezone'];?>
',
			//theme: true, TODO: add support of jQuery UI theme to the plugin's PHP
			events: $.service('tracker_calendar', 'list', $.extend(data.filterValues, {
				trackerId: data.trackerId,
				colormap: data.colormap,
				beginField: data.begin,
				endField: data.end,
				resourceField: data.resource,
				coloringField: data.coloring,
				filters: data.body
			})),
			resources: data.resourceList,
			year: data.viewyear,
			month: data.viewmonth-1,
			day: data.viewday,
			minTime: data.minHourOfDay,
			maxTime: data.maxHourOfDay,
			monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			monthNamesShort: [ "Jan.", "Feb.", "Mar.", "Apr.", "May", "June", "July", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."],
			dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
			buttonText: {
				resourceDay: "resource day",
				resourceMonth: "resource month",
				resourceWeek: "resource week",
				today: "today",
				month: "month",
				week: "week",
				day: "day"
			},
			allDayText: "all-day",
			firstDay: data.firstDayofWeek,
			weekends: data.weekends,
			slotMinutes: <?php echo $_smarty_tpl->tpl_vars['prefs']->value['calendar_timespan'];?>
,
			defaultView: data.dView,
			eventAfterRender : function( event, element, view ) {
				element.popover({trigger: 'hover focus', title: event.title, content: event.description, html: true, container: 'body'});
			},
			eventClick: function(event) {
				if (data.url) {
					var actualURL = data.url;
					actualURL += actualURL.indexOf("?") === -1 ? "?" : "&";

					if (data.trkitemid === "y" && data.addAllFields === "n") {	// "simple" mode
						actualURL += "itemId=" + event.id;
					} else {
						var lOp='';
						var html = $.parseHTML( event.description ) || [];

						// Store useful data values to the URL for Wiki Argument Variable
						// use and to javascript session storage for JQuery use
						actualURL += "trackerid=" + event.trackerId;
						if( data.trkitemid == 'y' ) {
							actualURL = actualURL + "&itemId=" + event.id;
						}
						else {
							actualURL = actualURL + "&itemid=" + event.id;
						}
						actualURL = actualURL + "&title=" + event.title;
						actualURL = actualURL + "&end=" + event.end;
						actualURL = actualURL + "&start=" + event.start;
						if (data.useSessionStorage) {
							sessionStorage.setItem( "trackerid", event.trackerId);
							sessionStorage.setItem( "title", event.title);
							sessionStorage.setItem( "start", event.start);
							sessionStorage.setItem( "itemid", event.id);
							sessionStorage.setItem( "end", event.end);
							sessionStorage.setItem( "eventColor", event.color);
						}

						// Capture the description HTML as variables
						// with the label being the variable name
						$.each( html, function( i, el ) {
							if( isEven( i ) == true ) {
								lOp = el.textContent.replace( ' ', '_' );
							}
							else {
								actualURL = actualURL + "&" + lOp + "=" + el.textContent;
								if (data.useSessionStorage) {
									sessionStorage.setItem( lOp, el.textContent);
								}
							}
						});
					}

					location.href=actualURL;
					return false;
				}
				else if (event.editable && event.trackerId) {
					var info = {
						trackerId: event.trackerId,
						itemId: event.id
					};
					$('<a href="#"/>').attr('href', $.service('tracker', 'update_item', info)).serviceDialog({
						title: event.title,
						success: function () {
							$(cal).fullCalendar('refetchEvents');
						}
					});
					return false;
				} else {
					return true;
				}

			},
			dayClick: function(date, allDay, jsEvent, view) {
				if (data.canInsert) {
					var info = {
						trackerId: data.trackerId
					};
					info[data.beginFieldName] = date.getTime() / 1000;
					info[data.endFieldName] = date.getTime() / 1000 + 3600;
					if (data.url) {
						$('<a href="#"/>').attr('href', data.url);
					}
					else {
						$('<a href="#"/>').attr('href', $.service('tracker', 'insert_item', info)).serviceDialog({
							title: data.addTitle,
							success: function () {
								$(cal).fullCalendar('refetchEvents');
							}
						});
					}
				}

				return false;
			},
			eventResize: storeEvent,
			eventDrop: storeEvent
		});
		$(this).fullCalendar( 'gotoDate', data.viewyear, data.viewmonth-1, data.viewday );
	});

	function isEven(x) { return (x%2)==0; }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
