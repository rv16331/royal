<!doctype html>
<html lang="en">
    <head>
        <title>Bus Ticket - search-results</title>
        <?php include 'bar/head.php';?>
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/custom.css">
        <style>
            .booking_table{
                min-height: 280px;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <?php include 'bar/nav.php';?>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            </div>
            <div class="hotel_booking_area position">
                <?php include 'bar/booking_area.php';?>
            </div>
        </section>
        <!--================Banner Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="row mb_30">
                    <div class="col-lg-12 col-sm-6">
                        <div class="accomodation_item bg-info text-center text-white">
                            <strong>
                                1 Trip(s) Available from <?php if(isset($_POST['from_city'])!='') echo $_POST['from_city'];?> - <?php if(isset($_POST['to_city'])!='') echo $_POST['to_city'];?> on <?php if(isset($_POST['departure_date'])!='') echo $_POST['departure_date'];?>
                            </strong>
                        </div>
                        <div class="row" id="row_1">
                            <div class="col-lg-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>AGRBPL0625</th>
                                            <th>06:25 AM</th>
                                            <th>08:30 AM</th>
                                            <th>37</th>
                                            <th>INR 140/-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>2+2, Deluxe,AC, Video (41 seats)</strong></td>
                                            <td>
                                                <strong>
                                                    <?php 
                                                        if(isset($_POST['departure_date'])!='') 
                                                            $depdate = strtotime($_POST['departure_date']);
                                                            echo date('D M. Y', $depdate);
                                                    ?>
                                                </strong>
                                            </td>
                                            <td>
                                                <strong>
                                                    <?php 
                                                        if(isset($_POST['departure_date'])!='') 
                                                            $depdate = strtotime($_POST['departure_date']);
                                                            echo date('D M. Y', $depdate);
                                                    ?>
                                                </strong>
                                            </td>
                                            <td><strong>Seats Available</strong></td>
                                            <td>
                                                <button class="genric-btn primary small" onclick="view_seats(1);">View Seats</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row bus_1" style="display: none;">
                            <div class="col-lg-3">
                                <table class="table set_table" style="width: 190px; border: 1px solid;">
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-right"><img src="image/bus-steering.png"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-toggle="tooltip" title="Seat No: A1 Fare: Rs.140/-" data-html="true">A1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: A2 Fare: Rs.140/-">A2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: A3 Fare: Rs.140/-">A3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: A4 Fare: Rs.140/-">A4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: B1 Fare: Rs.140/-">B1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: B2 Fare: Rs.140/-">B2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: B3 Fare: Rs.140/-">B3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: B4 Fare: Rs.140/-">B4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: C1 Fare: Rs.140/-">C1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: C2 Fare: Rs.140/-">C2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: C3 Fare: Rs.140/-">C3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: C4 Fare: Rs.140/-">C4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: D1 Fare: Rs.140/-">D1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: D2 Fare: Rs.140/-">D2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: D3 Fare: Rs.140/-">D3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: D4 Fare: Rs.140/-">D4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: E1 Fare: Rs.140/-">E1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: E2 Fare: Rs.140/-">E2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: E3 Fare: Rs.140/-">E3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: E4 Fare: Rs.140/-">E4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: F1 Fare: Rs.140/-">F1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: F2 Fare: Rs.140/-">F2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: F3 Fare: Rs.140/-">F3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: F4 Fare: Rs.140/-">F4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: G1 Fare: Rs.140/-">G1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: G2 Fare: Rs.140/-">G2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: G3 Fare: Rs.140/-">G3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: G4 Fare: Rs.140/-">G4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: H1 Fare: Rs.140/-">H1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: H2 Fare: Rs.140/-">H2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: H3 Fare: Rs.140/-">H3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: H4 Fare: Rs.140/-">H4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: I1 Fare: Rs.140/-">I1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: I2 Fare: Rs.140/-">I2
                                                </div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: I3 Fare: Rs.140/-">I3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: I4 Fare: Rs.140/-">I4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: J1 Fare: Rs.140/-">J1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: J2 Fare: Rs.140/-">J2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: J3 Fare: Rs.140/-">J3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: J4 Fare: Rs.140/-">J4</div>
                                            </td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: K1 Fare: Rs.140/-">K1</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: K2 Fare: Rs.140/-">K2</div>
                                            </td>
                                            <td colspan="2"></td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: K3 Fare: Rs.140/-">K3</div>
                                            </td>
                                            <td>
                                                <div class="available_seat" data-html="true" data-toggle="tooltip" title="Seat No: K4 Fare: Rs.140/-">K4</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <span id="allseats"></span>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <br>
                                <table class="table set_table" style="width: 100px;">
                                    <tbody>
                                        <tr data-toggle="tooltip" data-placement="top" title="Available">
                                            <td><div class="info_available_seat"></div></td>
                                            <td>Available</td>
                                        </tr>
                                        <tr data-toggle="tooltip" data-placement="top" title="Reserved">
                                            <td><div class="info_reserved_seat"></div></td>
                                            <td>Reserved</td>
                                        </tr>
                                        <tr data-toggle="tooltip" data-placement="top" title="Gents">
                                            <td><div class="info_gents_seat"></div></td>
                                            <td>Gents</td>
                                        </tr>
                                        <tr data-toggle="tooltip" data-placement="top" title="Ladies">
                                            <td><div class="info_ladies_seat"></div></td>
                                            <td>Ladies</td>
                                        </tr>
                                        <tr data-toggle="tooltip" data-placement="top" title="Available(L)">
                                            <td><div class="info_available_seat"></div></td>
                                            <td>Available(L)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
        
        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Royal Facilities</h2>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-map"></i>WI-FI</h4>
                            <p>Standard Micro USB Port</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-exit"></i>Emergency Exit</h4>
                            <p>An special exit for emergencies</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Blanket</h4>
                            <p>Clean blanket at bus</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-phone"></i>Phone Bookings 24*7</h4>
                            <p>+919165619836</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-clock"></i>Booking Time</h4>
                            <p>(10AM TO 8PM)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Water Bottel</h4>
                            <p>2 Water Bottel</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
        
        <!--================ start footer Area  =================-->	
        <?php include 'bar/footer.php';?>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php include 'bar/js.php';?>
        <script src="js/jquery-ui.js"></script>
        <script>
            var str = '';
            $(".available_seat").click(function(event) {
                str = $(this);
                $( '#new' ).modal('show');
                if ($(this).attr('class')!='available_seat')
                    if ($(this).attr('class')=='available_seat gents_seat')
                        choose_candidate(0);
                    else
                        choose_candidate(1);
            });
            function choose_candidate(i){
                var total_seats = '';
                var checked_alt = 0;
                if (i!=1)
                    $(str).toggleClass("gents_seat");
                else
                    $(str).toggleClass("ladies_seat");
                $(".available_seat").each(function(key){
                    var this_seats = $(this).text();
                    if ($(this).attr('class')=='available_seat gents_seat' || $(this).attr('class')=='available_seat ladies_seat') {
                        total_seats +=  this_seats.trim()+' - ';
                        checked_alt++;
                    }
                });
                $('#allseats').html(total_seats);
                $( '#new' ).modal('hide');
            };
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            })
        </script>
        <div class = "modal" id = "new" role = "dialog">
            <div class = "modal-dialog modal-sm">
                <div class = "modal-content">
                    <div class = "modal-body text-center">
                        <div class="btn-group">
                            <button type="button" class="genric-btn info small" onclick="choose_candidate(0);">
                                <i class="fa fa-male"></i> Male
                            </button>
                            <button type="button" class="genric-btn danger small" onclick="choose_candidate(1);">
                                <i class="fa fa-female"></i> Female
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>