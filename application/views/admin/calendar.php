<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Calendar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/fullcalendarxx.min.css' rel='stylesheet' />
    <link href='css/sweetalert.css' rel='stylesheet' />
    <link href='css/AdminLTE.min.css' rel='stylesheet' />

    <style>
        #calendar {
            max-width: 1300px;
        }
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        .tooltip{
            width:auto;
            height:20%;
            color:black;
            background:#E5E5E5;
            position:absolute;
            z-index:10001;
            border-radius:5px;
            top: -300%;
            left:50%;
            padding:5px 10px;
            margin-left:-60px;
            bottom: 150%;
            font-size: 15px;
        }
        .colors{
            font-size: 14px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            background: white;
            /* border-style: solid;
            border-width: 3px;
            border-color: #C6CFD6;
            border-radius:20px; */
            height:500px;
            width: 15%;
            margin: 0px 0px;
            padding: 0px 0px;
        }
        .colors-div{
            font-size: 14px;
            background: white;
            /* border-style: solid;
            border-width: 3px;
            border-color: #C6CFD6;
            border-radius:20px; */
            padding: 5px;
        }
        .colors-header{
            margin: 0 auto;
            background-color:#379441;
            width: 115%;
            height: 9%;
            padding: 10px;
            border-style: solid;
            border-top-left-radius: 18px;
            border-top-right-radius: 18px;
            border-color: transparent;
            margin-left: -15px;
        }
        .color-scheme-text{
            font-size: 14px;

        }
        .color-text{
            font-size: 12px;
        }
    </style>
</head>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Calendar</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Calendar</a></li>
                <li class="active">Calendar Events</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                
            <?php if($this->session->flashdata('success')): ?>
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            </div>
            <?php elseif($this->session->flashdata('error')):?>
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Failed!</h4>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            </div>
            <?php endif;?>

                <div class="col-md-10">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example1" class="table table-bordered table-hover" style="margin-right:-10px">
                                        <div id="calendar" class="col-centered"></div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-10 colors text-center">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="col-md-12 colors-div">
                                <label class="color-scheme-text h3">Event Categories</label><br>
                                <label class="color-text">Urgent Meetings</label><br>
                                <input type="text" class="form-control" style="background:#FF0000;" required readonly>

                                <label class="color-text">Personal Schedule</label><br>
                                <input type="text" class="form-control" style="background:#009222;" required readonly>

                                <label class="color-text">Special Events</label><br>
                                <input type="text" class="form-control" style="background:#FF6E33;" required readonly>

                                <label class="color-text">Extra Holidays</label><br>
                                <input type="text" class="form-control" style="background:#337ab7;" required readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include('modal.php');?>

    <!-- Include your JavaScript files at the end of the body -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendarxx.min.js'></script>
    <script src='js/sweetalert.min.js'></script>
    <script src='packages/list/main.js'></script>

    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
            plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
            header: {
                left: 'prev,next',
                center: 'title',
                //right: 'month,agendaWeek,agendaDay,listDay,listWeek,listMonth',
                right: 'today,month,listWeek,listMonth',
            },
            views: {
                listDay: { buttonText: 'List day' },
                listWeek: { buttonText: 'List week' },
                listMonth: { buttonText: 'List month' },
                month: { buttonText: 'Month' },
                today: { buttonText: 'Today' },
                agendaWeek: { buttonText: 'Week' },
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            selectHelper: true,
            timeFormat:"h:mma",
            defaultView:'month',
            scrollTime: '08:00', // undo default 6am scrollTime
            eventOverlap:false,
            allDaySlot: false,

                select: function(start, end) {
                    //$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                    $('#ModalAdd').modal('show');
                },
                eventRender: function(event, element) {
                    element.bind('dblclick', function() { //gawin mong CLICK yung parameter para maging single
                        $('#ModalEdit #id').val(event.id);
                        $('#ModalEdit #title').val(event.title);
                        $('#ModalEdit #color').val(event.color);
                        //$('#ModalEdit #start').val(event.start);
                        $('#ModalEdit #start').val(moment(event.start).format('YYYY-MM-DD HH:mm:ss'));
                        $('#ModalEdit #end').val(moment(event.end).format('YYYY-MM-DD HH:mm:ss'));
                    //	$('#ModalEdit #end').val(event.end);
                        $('#ModalEdit').modal('show');
                        //var formattedTime = $.fullCalendar.formatDates(event.start, event.end, "HH:mm { - HH:mm}");
                        }
                    );
                },

                eventDrop: function(event, delta, revertFunc) { // si changement de position
                    edit(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                    edit(event);
                },

                eventMouseover: function(Event, jsEvent) {
                    /*var tooltip = '<div class="tooltip" >' +'<b>ACTIVITY :</b>&nbsp;'+ Event.title + '<br><b>TIME :</b>&nbsp;'+(moment(Event.start).format('HH:mma'))+'</div>';*/

                    var tooltip = '<div class="tooltip" >' +'<b>WHAT :</b>&nbsp;'+ Event.title + '<br><b>DURATION :</b>&nbsp;'+(moment(Event.start).format('HH:mma'))+'&nbsp;-&nbsp;'+(moment(Event.end).format('HH:mma'))+'</div>';

                    var $tooltip = $(tooltip).appendTo('body');

                    $(this).mouseover(function(e) {
                        $(this).css('z-index', 10000);
                        $tooltip.fadeIn('500');
                        $tooltip.fadeTo('10', 1.9);
                    }).mousemove(function(e) {
                        $tooltip.css('top', e.pageY + 10);
                        $tooltip.css('left', e.pageX + 20);
                    });
                },

                eventMouseout: function(Event, jsEvent) {
                    $(this).css('z-index', 8);
                    $('.tooltip').remove();
                },

                events: [
                <?php foreach($events as $event):

                    $start = explode(" ", $event['start']);
                    $end = explode(" ", $event['end']);
                    if($start[1] == '00:00:00'){
                        $start = $start[0];
                    }else{
                        $start = $event['start'];
                    }
                    if($end[1] == '00:00:00'){
                        $end = $end[0];
                    }else{
                        $end = $event['end'];
                    }   
                    ?>
                    {
                        id: '<?php echo $event['id']; ?>',
                        title: '<?php echo $event['title']; ?>',
                        start: '<?php echo $start; ?>',
                        end: '<?php echo $end; ?>',
                        color: '<?php echo $event['color']; ?>',
                    },
                <?php endforeach; ?>
                ]
            });

            function edit(event){
                start = event.start.format('YYYY-MM-DD HH:mm:ss');
                if(event.end){
                    end = event.end.format('YYYY-MM-DD HH:mm:ss');
                }else{
                    end = start;
                }
                id =  event.id;
                Event = [];
                Event[0] = id;
                Event[1] = start;
                Event[2] = end;

                $.ajax({
                    url: 'editEventDate.php',
                    type: "POST",
                    data: {Event:Event},
                    success: function(rep) {
                        if(rep == 'OK'){
                            //alert('Saved');
                            swal("Done!","Successfully MOVED!","success");
                        }else{
                            //alert('Could not be saved. try again.');
                            swal("Cancelled", "Could not be saved. Please try again", "error");
                        }
                    }
                });
            }

            function add(event){
            title = event.title;
            start = event.start;
            end = event.end;
            color = event.color;
            if(event.end){
                    end = event.end.format('YYYY-MM-DD HH:mm:ss');
                }else{
                    end = start;
                }

                id =  event.id;

                Event = [];
                Event[0] = id;
                Event[1] = title;
                Event[2] = start;
                Event[3] = end;
                Event[4] = color;

                $.ajax({
                    url: 'addEvent.php',
                    type: "POST",
                    data: {Event:Event},
                    success: function(repp) {
                        if(repp == 'OK'){
                            //alert('Saved');
                            swal("Done!","Successfully saved!","success");
                        }else{
                            //alert('Could not be saved. try again.');
                            swal("Cancelled", "Could not be saved. Please try again", "error");
                        }
                    }
                });
            }
            });
    </script>
    </section>
</div>
</html>
