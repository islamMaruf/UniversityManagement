@extends('backend.home.home')

@section('Content')
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <h4 class="header-title m-t-0 m-b-20">Welcome !  {{ Auth::user()->name }} to predict your Data Structure Result</h4>
                    <span class="text-center text-success" id="helpTxt">Select the following condition according to your guess</span>
                </div>
            </div>
            <div id="allDetails">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row" id="finalFirst" >
                                <div class="col-lg-6 col-sm-6"  >
                                    <div >
                                        <button id="upper27" class="btn btn-primary" onclick="checkUpper27()" >final Number > 27</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6" >
                                    <div >
                                        <button id="lower27" class="btn btn-primary" onclick="checkLower27()">final Number <= 27</button>
                                    </div>
                                </div>


                            </div>
                            <div class="row" id="finalSecond" hidden>
                                <div class="col-lg-6 col-sm-6" id="finalResultDiv" >
                                    <div >
                                        <button class="btn btn-primary" onclick="checkUpper8()">final Number > 8.5</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6" id="finalResultDiv" >
                                    <div >
                                        <button class="btn btn-primary" onclick="checkLower8()">final Number <= 8.5</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="finalThird" hidden >
                                <div class="col-lg-6 col-sm-6">
                                    <div >
                                        <button class="btn btn-primary" id="finalMore31" onclick="checkUpper31()">final Number > 31.5</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div>
                                        <button class="btn btn-primary" id="finalLess31" onclick="checkLower31()">final Number <= 31.5</button>
                                    </div>
                                </div>


                            </div>
                            <div class="row" id="finalFourth" hidden>
                                <div class="col-lg-6 col-sm-6" id="finalResultDiv" >
                                    <div >
                                        <button class="btn btn-primary" onclick="checkUpper33()" >final Number > 33.5</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6" id="finalResultDiv" >
                                    <div >
                                        <button class="btn btn-primary" onclick="checkLower33()">final Number <= 33.5</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <h4 class="m-t-0">Expected result</h4>

                    </div>
                </div>
                <div class="row"  id="finalResult">
                    <div class="col-sm-2 center-page">
                        <span class="btn btn-lg text-lg-center" id="resultId"></span>




                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


    <script>
        var results = [];
        results = @json($studentMark);
            var attendance = results[0].attendance;
            var assignment = results[0].assignment;
            var quiz = results[0].quiz;
            var midterm = results[0].midTerm;
            var presentation = results[0].presentation;

            function checkUpper27() {
                var divclass = document.getElementById('finalFirst');
                divclass.hidden = true;
                if(midterm > 13.5 ){
                    var secondDiv = document.getElementById('finalFourth');
                    secondDiv.hidden = false;


                }else if(midterm<=13.5){
                    if (midterm>6){
                        if(quiz>10.67){
                            result('resultId','btn-primary','Good');
                        }else if (quiz<=10.67){
                            if(attendance>6.13){
                                if(midterm>10){
                                    result('resultId','btn-primary','Good');
                                }else if(midterm<=10){
                                    result('resultId','btn-info','Average');
                                }

                            }else if (attendance<=6.13){
                                result('resultId','btn-info','Average');
                            }
                        }

                    } else if(midterm<=6){
                        var divclss = document.getElementById('finalThird');
                        divclss.hidden = true;
                    }

                }


            }

            function  checkLower27(){
                var divclas = document.getElementById('finalFirst');
                divclas.hidden = true;
                var divShow = document.getElementById('finalSecond');
                divShow.hidden = false;

            }

            function checkUpper31() {
                result('resultId','btn-info','Average');
            }
            function checkLower31() {
                result('resultId','btn-warning','Below Average');
            }

            function checkUpper33() {
                result('resultId','btn-success','Excellent');
            }
            function checkLower33() {
                if(midterm>20){
                    result('resultId','btn-success','Excellent');
                }else if (midterm<=20){
                    result('resultId','btn-primary','Good');
                }
            }

            function checkUpper8() {
                if(quiz>8){
                    if(midterm>12.5){
                        if (presentation>6.2){
                            result('resultId','btn-primary','Good');
                        }else if(presentation<=6.2){
                            result('resultId','btn-info','Average');
                        }

                    }else if(midterm<=12.5){
                        if(attendance>6.68){
                            result('resultId','btn-primary','Good');
                        }else if(attendance<=6.68){
                            if (assignment>3.5){
                                result('resultId','btn-info','Average');
                            } else  if(assignment<=3.5){
                                result('resultId','btn-warning','Below Average');
                            }

                        }
                    }

                }else if(quiz<=8){
                    result('resultId','btn-warning','Below Average');
                }


            }

            function checkLower8() {
                result('resultId','btn-danger','Fail')
            }


            function result(classId,className,status) {
                var results = document.getElementById(classId);
                results.classList.add(className);
                results.innerHTML = status;
            }






    </script>

