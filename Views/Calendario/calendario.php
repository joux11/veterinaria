<?php require_once("Views/header.php"); ?>
<link href="assets/plugins/@fullcalendar/common/main.min.css" rel="stylesheet" />
<link href="assets/plugins/@fullcalendar/daygrid/main.min.css" rel="stylesheet" />
<link href="assets/plugins/@fullcalendar/timegrid/main.min.css" rel="stylesheet" />
<link href="assets/plugins/@fullcalendar/list/main.min.css" rel="stylesheet" />
<link href="assets/plugins/@fullcalendar/bootstrap/main.min.css" rel="stylesheet" />
<div id="content" class="app-content">


    <div class="calendar">
        <!-- BEGIN calendar-body -->
        <div class="calendar-body">
            <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap fc-liquid-hack">
                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                    <div class="fc-toolbar-chunk">
                        <div class="btn-group"><button type="button" title="Month view" aria-pressed="true" class="fc-dayGridMonth-button btn btn-primary active">Month</button><button type="button" title="Week view" aria-pressed="false" class="fc-timeGridWeek-button btn btn-primary">Week</button><button type="button" title="Day view" aria-pressed="false" class="fc-timeGridDay-button btn btn-primary">Day</button></div>
                    </div>
                    <div class="fc-toolbar-chunk">
                        <h2 class="fc-toolbar-title" id="fc-dom-1">September 2023</h2>
                    </div>
                    <div class="fc-toolbar-chunk">
                        <div class="btn-group"><button type="button" title="Previous Month" aria-pressed="false" class="fc-prev-button btn btn-primary"><span class="fa fa-chevron-left"></span></button><button type="button" title="Next Month" aria-pressed="false" class="fc-next-button btn btn-primary"><span class="fa fa-chevron-right"></span></button></div><button type="button" title="This Month" disabled="" aria-pressed="false" class="fc-today-button btn btn-primary">Today</button>
                    </div>
                </div>
                <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 555.556px;">
                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                        <table role="grid" class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                            <tbody role="rowgroup">
                                <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                    <th role="presentation">
                                        <div class="fc-scroller-harness">
                                            <div class="fc-scroller" style="overflow: hidden;">
                                                <table role="presentation" class="fc-col-header " style="width: 750px;">
                                                    <colgroup></colgroup>
                                                    <thead role="presentation">
                                                        <tr role="row">
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Sunday" class="fc-col-header-cell-cushion ">Sun</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Monday" class="fc-col-header-cell-cushion ">Mon</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Tuesday" class="fc-col-header-cell-cushion ">Tue</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Wednesday" class="fc-col-header-cell-cushion ">Wed</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Thursday" class="fc-col-header-cell-cushion ">Thu</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Friday" class="fc-col-header-cell-cushion ">Fri</a></div>
                                                            </th>
                                                            <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat">
                                                                <div class="fc-scrollgrid-sync-inner"><a aria-label="Saturday" class="fc-col-header-cell-cushion ">Sat</a></div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                    <td role="presentation">
                                        <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                            <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden auto;">
                                                <div class="fc-daygrid-body fc-daygrid-body-unbalanced " style="width: 750px;">
                                                    <table role="presentation" class="fc-scrollgrid-sync-table" style="width: 750px; height: 527px;">
                                                        <colgroup></colgroup>
                                                        <tbody role="presentation">
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other" data-date="2023-08-27" aria-labelledby="fc-dom-2">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-2" class="fc-daygrid-day-number" aria-label="August 27, 2023">27</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other" data-date="2023-08-28" aria-labelledby="fc-dom-4">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-4" class="fc-daygrid-day-number" aria-label="August 28, 2023">28</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other" data-date="2023-08-29" aria-labelledby="fc-dom-6">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-6" class="fc-daygrid-day-number" aria-label="August 29, 2023">29</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other" data-date="2023-08-30" aria-labelledby="fc-dom-8">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-8" class="fc-daygrid-day-number" aria-label="August 30, 2023">30</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other" data-date="2023-08-31" aria-labelledby="fc-dom-10">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-10" class="fc-daygrid-day-number" aria-label="August 31, 2023">31</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-past" data-date="2023-09-01" aria-labelledby="fc-dom-12">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-12" class="fc-daygrid-day-number" aria-label="September 1, 2023">1</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -108.133px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-past" style="border-color: rgb(32, 201, 151); background-color: rgb(32, 201, 151);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Trip to London</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-past" data-date="2023-09-02" aria-labelledby="fc-dom-14">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-14" class="fc-daygrid-day-number" aria-label="September 2, 2023">2</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 23px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(31, 107, 255);"></div>
                                                                                    <div class="fc-event-time">6a</div>
                                                                                    <div class="fc-event-title">Meet with Sean Ngu</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-09-03" aria-labelledby="fc-dom-16">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-16" class="fc-daygrid-day-number" aria-label="September 3, 2023">3</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -107.133px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-end fc-event-past" style="border-color: rgb(32, 201, 151); background-color: rgb(32, 201, 151);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Trip to London</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-09-04" aria-labelledby="fc-dom-18">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-18" class="fc-daygrid-day-number" aria-label="September 4, 2023">4</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-09-05" aria-labelledby="fc-dom-20">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-20" class="fc-daygrid-day-number" aria-label="September 5, 2023">5</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -107.133px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-end" style="border-color: rgb(100, 13, 243); background-color: rgb(100, 13, 243);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-time">8:45a</div>
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Stonehenge, Windsor Castle, Oxford</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-today " data-date="2023-09-06" aria-labelledby="fc-dom-22">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-22" class="fc-daygrid-day-number" aria-label="September 6, 2023">6</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-09-07" aria-labelledby="fc-dom-24">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-24" class="fc-daygrid-day-number" aria-label="September 7, 2023">7</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-09-08" aria-labelledby="fc-dom-26">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-26" class="fc-daygrid-day-number" aria-label="September 8, 2023">8</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-09-09" aria-labelledby="fc-dom-28">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-28" class="fc-daygrid-day-number" aria-label="September 9, 2023">9</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-09-10" aria-labelledby="fc-dom-30">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-30" class="fc-daygrid-day-number" aria-label="September 10, 2023">10</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -107.133px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future" style="border-color: rgb(214, 51, 132); background-color: rgb(214, 51, 132);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Mobile Apps Brainstorming</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-09-11" aria-labelledby="fc-dom-32">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-32" class="fc-daygrid-day-number" aria-label="September 11, 2023">11</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-09-12" aria-labelledby="fc-dom-34">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-34" class="fc-daygrid-day-number" aria-label="September 12, 2023">12</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs" style="top: 0px; left: 0px; right: -321.4px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Paris Trip</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2023-09-13" aria-labelledby="fc-dom-36">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-36" class="fc-daygrid-day-number" aria-label="September 13, 2023">13</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-09-14" aria-labelledby="fc-dom-38">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-38" class="fc-daygrid-day-number" aria-label="September 14, 2023">14</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 23px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-09-15" aria-labelledby="fc-dom-40">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-40" class="fc-daygrid-day-number" aria-label="September 15, 2023">15</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 23px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future" style="border-color: rgb(31, 107, 255); background-color: rgb(31, 107, 255);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Domain name due</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-09-16" aria-labelledby="fc-dom-42">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-42" class="fc-daygrid-day-number" aria-label="September 16, 2023">16</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-09-17" aria-labelledby="fc-dom-44">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-44" class="fc-daygrid-day-number" aria-label="September 17, 2023">17</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-09-18" aria-labelledby="fc-dom-46">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-46" class="fc-daygrid-day-number" aria-label="September 18, 2023">18</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-09-19" aria-labelledby="fc-dom-48">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-48" class="fc-daygrid-day-number" aria-label="September 19, 2023">19</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Cambridge Trip</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2023-09-20" aria-labelledby="fc-dom-50">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-50" class="fc-daygrid-day-number" aria-label="September 20, 2023">20</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-09-21" aria-labelledby="fc-dom-52">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-52" class="fc-daygrid-day-number" aria-label="September 21, 2023">21</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-09-22" aria-labelledby="fc-dom-54">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-54" class="fc-daygrid-day-number" aria-label="September 22, 2023">22</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(31, 107, 255);"></div>
                                                                                    <div class="fc-event-time">3a</div>
                                                                                    <div class="fc-event-title">Live Recording</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(32, 201, 151);"></div>
                                                                                    <div class="fc-event-time">5a</div>
                                                                                    <div class="fc-event-title">Visit Apple Company</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(255, 149, 0);"></div>
                                                                                    <div class="fc-event-time">7:30a</div>
                                                                                    <div class="fc-event-title">Exercise Class</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(230, 24, 13);"></div>
                                                                                    <div class="fc-event-time">3p</div>
                                                                                    <div class="fc-event-title">Announcement</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot"></div>
                                                                                    <div class="fc-event-time">6p</div>
                                                                                    <div class="fc-event-title">Dinner</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-09-23" aria-labelledby="fc-dom-56">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-56" class="fc-daygrid-day-number" aria-label="September 23, 2023">23</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future" data-date="2023-09-24" aria-labelledby="fc-dom-58">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-58" class="fc-daygrid-day-number" aria-label="September 24, 2023">24</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future" data-date="2023-09-25" aria-labelledby="fc-dom-60">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-60" class="fc-daygrid-day-number" aria-label="September 25, 2023">25</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(230, 24, 13);"></div>
                                                                                    <div class="fc-event-time">8a</div>
                                                                                    <div class="fc-event-title">New Android App Discussion</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(31, 107, 255);"></div>
                                                                                    <div class="fc-event-time">12p</div>
                                                                                    <div class="fc-event-title">Marketing Plan Presentation</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future" data-date="2023-09-26" aria-labelledby="fc-dom-62">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-62" class="fc-daygrid-day-number" aria-label="September 26, 2023">26</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(255, 149, 0);"></div>
                                                                                    <div class="fc-event-time">8a</div>
                                                                                    <div class="fc-event-title">Heartguard</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(255, 149, 0);"></div>
                                                                                    <div class="fc-event-time">12p</div>
                                                                                    <div class="fc-event-title">Chase due</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future" data-date="2023-09-27" aria-labelledby="fc-dom-64">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-64" class="fc-daygrid-day-number" aria-label="September 27, 2023">27</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future" data-date="2023-09-28" aria-labelledby="fc-dom-66">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-66" class="fc-daygrid-day-number" aria-label="September 28, 2023">28</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future">
                                                                                    <div class="fc-daygrid-event-dot" style="border-color: rgb(31, 107, 255);"></div>
                                                                                    <div class="fc-event-time">2p</div>
                                                                                    <div class="fc-event-title">Lunch with Richard</div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-09-29" aria-labelledby="fc-dom-68">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-68" class="fc-daygrid-day-number" aria-label="September 29, 2023">29</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-09-30" aria-labelledby="fc-dom-70">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-70" class="fc-daygrid-day-number" aria-label="September 30, 2023">30</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-event-harness" style="margin-top: 0px;"><a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future" style="border-color: rgb(31, 107, 255); background-color: rgb(31, 107, 255);">
                                                                                    <div class="fc-event-main">
                                                                                        <div class="fc-event-main-frame">
                                                                                            <div class="fc-event-title-container">
                                                                                                <div class="fc-event-title fc-sticky">Web Hosting due</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                </a></div>
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-future fc-day-other" data-date="2023-10-01" aria-labelledby="fc-dom-72">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-72" class="fc-daygrid-day-number" aria-label="October 1, 2023">1</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-future fc-day-other" data-date="2023-10-02" aria-labelledby="fc-dom-74">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-74" class="fc-daygrid-day-number" aria-label="October 2, 2023">2</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other" data-date="2023-10-03" aria-labelledby="fc-dom-76">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-76" class="fc-daygrid-day-number" aria-label="October 3, 2023">3</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other" data-date="2023-10-04" aria-labelledby="fc-dom-78">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-78" class="fc-daygrid-day-number" aria-label="October 4, 2023">4</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other" data-date="2023-10-05" aria-labelledby="fc-dom-80">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-80" class="fc-daygrid-day-number" aria-label="October 5, 2023">5</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other" data-date="2023-10-06" aria-labelledby="fc-dom-82">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-82" class="fc-daygrid-day-number" aria-label="October 6, 2023">6</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                                <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other" data-date="2023-10-07" aria-labelledby="fc-dom-84">
                                                                    <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                        <div class="fc-daygrid-day-top"><a id="fc-dom-84" class="fc-daygrid-day-number" aria-label="October 7, 2023">7</a></div>
                                                                        <div class="fc-daygrid-day-events">
                                                                            <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                        </div>
                                                                        <div class="fc-daygrid-day-bg"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ENG calendar-body -->
        <!-- BEGIN calendar-sidebar -->
        <div class="calendar-sidebar">
            <div class="desktop-sticky-top flex-fill">
                <div class="calendar-sidebar-title">Draggable Events:</div>
                <div class="fc-event-list" id="external-events">
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#ff2d55"><i class="fa fa-circle fs-8px me-2 text-pink"></i> Meeting</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#ff3b30"><i class="fa fa-circle fs-8px me-2 text-danger"></i> Group Discussion</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#FF9500"><i class="fa fa-circle fs-8px me-2 text-warning"></i> Brainstorming</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#FFCC00"><i class="fa fa-circle fs-8px me-2 text-yellow"></i> Presentation</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#1ABD36"><i class="fa fa-circle fs-8px me-2 text-success"></i> Holiday</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#0cd096"><i class="fa fa-circle fs-8px me-2 text-teal"></i> Sick Leave</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#30beff"><i class="fa fa-circle fs-8px me-2 text-info"></i> Overtime</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#1f6bff"><i class="fa fa-circle fs-8px me-2 text-blue"></i> Work from Home</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#640DF3"><i class="fa fa-circle fs-8px me-2 text-indigo"></i> Business Travel</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#5b2e91"><i class="fa fa-circle fs-8px me-2 text-purple"></i> Breakfast</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#869ac0"><i class="fa fa-circle fs-8px me-2 text-muted"></i> Lunch</div>
                    </div>
                    <div class="fc-event-item">
                        <div class="fc-event-link" data-color="#869ac0"><i class="fa fa-circle fs-8px me-2 text-muted"></i> Dinner</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ENG calendar-sidebar -->
    </div>



</div>
<?php require_once("Views/footer.php"); ?>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/@fullcalendar/core/main.global.js"></script>
<script src="assets/plugins/@fullcalendar/daygrid/main.global.js"></script>
<script src="assets/plugins/@fullcalendar/timegrid/main.global.js"></script>
<script src="assets/plugins/@fullcalendar/interaction/main.global.js"></script>
<script src="assets/plugins/@fullcalendar/list/main.global.js"></script>
<script src="assets/plugins/@fullcalendar/bootstrap/main.global.js"></script>
<script src="assets/js/demo/calendar.demo.js"></script>
<script>
    $(document).ajaxStart(function() {
        $('.preloader').show();
    });

    // Ocultar el preloader cuando todas las solicitudes AJAX han terminado
    $(document).ajaxStop(function() {
        $('.preloader').fadeOut(500);


    });

    window.onload = () => {
        fnPropietarios();

    }
</script>