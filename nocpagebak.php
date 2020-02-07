<html>
        <head>
                <meta charset="UTF-8">
                <title> NOC Page </title>
        </head>
                <style>
                    .tabWrap { width: 1200px; height: 800px; margin-left: auto; margin-right: auto; }
                    .tab_Menu { margin: 0px; padding: 0px; list-style: none; }
                    .tabMenu { width: 149px; height: 40px; margin: 0px; text-align: center;
                               padding-top: 10px; padding-bottom: 10px; float: left; }
                        .tabMenu a { color: #010101; font-weight: bold; text-decoration: none; }
                    .current { background-color: #FEFEFE;
                               border: 1px solid black; border-bottom:hidden; }
                    .tabPage { width: 1200px; height: 800px; float: left;
                               border: 1px solid black; }
                </style>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js" ></script>
        <script type="text/javascript">
                function tabSetting() {
                        // 탭 컨텐츠 hide 후 현재 탭메뉴 페이지만 show
                        $('.tabPage').hide();
                        $($('.current').find('a').attr('href')).show();

                        // Tab 메뉴 클릭 이벤트 생성
                        $('li').click(function (event) {
                                var tagName = event.target.tagName; // 현재 선택된 태그네임
                                var selectedLiTag = (tagName.toString() == 'A') ? $(event.target).parent('li') : $(event.target); // A태그일 경우 상위 Li태그 선택, Li태그일 경우 그대로 태그 객체
                                var currentLiTag = $('li[class~=current]'); // 현재 current 클래그를 가진 탭
                                var isCurrent = false;

                        // 현재 클릭된 탭이 current를 가졌는지 확인
                        isCurrent = $(selectedLiTag).hasClass('current');

                        // current를 가지지 않았을 경우만 실행
                        if (!isCurrent) {
                                $($(currentLiTag).find('a').attr('href')).hide();
                                $(currentLiTag).removeClass('current');

                                $(selectedLiTag).addClass('current');
                                $($(selectedLiTag).find('a').attr('href')).show();
                        }

                            return false;
                         });
                }

                        $(function () {
                        // 탭 초기화 및 설정
                        tabSetting();
                });
</script>
        <body>
                <br><br><br>
                <h1 style="text-align:center"> NOC Page </h1>
	        <pre>																									 <button id="down" onclick="location.href='./download.php'"> 메뉴얼 다운로드 </button></pre>
                <div class="tabWrap">
                  <ul class="tab_Menu">
                        <li class="tabMenu current">
                                <a href="#tabContent01" >Monitoring</a>
                        </li>
                        <li class="tabMenu">
                                <a href="#tabContent02" >Streaming Monitoring</a>
                        </li>
                        <li class="tabMenu">
                                <a href="#tabContent03" >Neocast</a>
                         </li>
                         <li class="tabMenu">
                                <a href="#tabContent04" >Use</a>
                         </li>
                         <li class="tabMenu">
                                <a href="#tabContent05" > Notice </a>
                         </li>
                         <li class="tabMenu">
                                <a href="#tabContent06" > 예비 </a>
                         </li>
                         <li class="tabMenu">
                                <a href="#tabContent07" > 예비</a>
                         </li>
                         <li class="tabMenu">
                                <a href="#tabContent08" > 예비</a>
                         </li>
                   </ul>
                 <div class="tab_Content_Wrap">
                        <div id="tabContent01" class="tabPage">
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">ISM</span> </h3>
                                        <p>
                                        <a href="http://222.122.175.3:8888/index.htm" target="_blank">KTCDN 1.0</a><br>
                                        <a href="http://kt-ism.solbox.com/index.htm" target="_blank">KTCDN 2.0</a><br>
                                        <a href="http://ism.ktcdn.co.kr/index.htm" target="_blank">KTCDN 3.0</a><br>
                                        <a href="http://211.233.68.197:8888/index.htm" target="_blank">LGCDN </a><br>
                                        <a href="http://ism.myskcdn.co.kr:8088/index.htm" target="_blank">SKCDN </a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red"> Grafana </span> </h3>
                                        <p>
                                        <a href="http://grafana01.mon.solbox.com:3000" target="_blank">Grafana01(Main)</a><br>
                                        <a href="http://grafana02.mon.solbox.com:3000" target="_blank">Grafana02(KT, KTE2E)</a><br>
                                        <a href="http://grafana03.mon.solbox.com:3000" target="_blank">Grafana03(ETC)</a><br>
                                        <a href="http://grafana04.mon.solbox.com:3000" target="_blank">Grafana04(Genie)</a><br>
                                        <a href="http://mon.lgucdn.com:3000" target="_blank">Grafana(LG)</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">PRTG</span> </h3>
                                        <p>
                                        <a href="https://prtg.mon.solbox.com/public/login.htm?errorid=1&loginurl=" target="_blank">PRTG</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">E2E</span> </h3>
                                        <p>
                                        <a href="http://maindashboard.mon.solbox.com/main#!/" target="_blank">KT E2E</a><br>
                                        <a href="http://lg-maindashboard.mon.solbox.com/main#!/" target="_blank">LG E2E</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">AMS</span> </h3>
                                        <p>
                                        <a href="http://ams.solbox.com/login#/" target="_blank">AMS</a><br>
                                        <a href="http://ams.ktcdn.co.kr" target="_blank">KT AMS</a><br>
                                        <a href="http://ams.lgucdn.com" target="_blank">LG AMS</a><br>
                                        <a href="http://ams.myskcdn.co.kr" target="_blank">SK AMS</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">GMS</span> </h3>
                                        <p>
                                        <a href="http://cc-gms.ktsh.co.kr/status/index.html" target="_blank">KT GMS</a><br>
                                        <a href="http://cs-gms.x-cdn.com/status/index.html" target="_blank">LG GMS</a><br>
                                        <a href="http://cs-gms.myskcdn.co.kr/status/index.html" target="_blank">SK GMS</a><br>
                                        </p>
                                </div>


                        </div>

                        <div id="tabContent02" class="tabPage">
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">KT, CJENM</span> </h3>
                                        <p>
                                        <a href="http://oculus.mon.solbox.com/login" target="_blank">oculus</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">SBS, ottmedia</span> </h3>
                                        <p>
                                        <a href="http://prj1-status.solbox.com/stream_monitor/monitoring.php" target="_blank">prj-status</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">Live monitoring</span> </h3>
                                        <p>
                                        <a href="http://119.206.199.56/st_monitor.php" target="_blank">SBS Live Monitoring</a><br>
                                        <a href="http://119.206.199.56/cjenm_monitor.php" target="_blank">CJENM Live Monitoring</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">SBS 라이브 릴레이 정보</span> </h3>
                                        <p>
                                        <a href="https://wiki.solbox.com/pages/viewpage.action?pageId=11903091" target="_blank">TS_Team Wiki</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">SW Player(스트림 테스트)</span> </h3>
                                        <p>
                                        <a href="http://125.141.137.31/swplayer/player.sb" target="_blank">SW Player</a><br>
                                        </p>
                                </div>
                        </div>
                        <div id="tabContent03" class="tabPage">
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">KTCDN 2.0</span> </h3>
                                        <p>
                                        <a href="http://119.206.192.252/NeoCast/index.html" target="_blank">bd-01</a><br>
                                        <a href="http://183.110.202.252/NeoCast/index.html">bd-03</a><br>
                                        <a href="http://183.110.52.252/NeoCast/index.html" target="_blank">nb-01</a><br>
                                        <a href="http://121.254.146.250/NeoCast/index.html" target="_blank">da-01</a><br>
                                        <a href="http://121.189.30.250/NeoCast/index.html" target="_blank">yd-01</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">KTCDN 3.0</span> </h3>
                                        <p>
                                        <a href="http://222.122.175.76/neocast-rc/" target="_blank">bd-31</a><br>
                                        <a href="http://183.110.54.76/neocast-rc/" target="_blank">bd-61</a><br>
                                        <a href="http://183.111.44.76/neocast-rc/" target="_blank">gn-81</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">LGCDN</span> </h3>
                                        <p>
                                        <a href="http://182.162.108.5/NeoCast/index.html" target="_blank">gs-01</a><br>
                                        <a href="http://211.115.77.153/NeoCast/index.html">nf-41</a><br>
                                        <a href="http://61.111.52.133/NeoCast/index.html" target="_blank">nh-01</a><br>
                                        <a href="http://1.234.26.23:8080/NeoCast/index.html" target="_blank">sk-01</a><br>
                                        <a href="http://210.124.122.132/NeoCast/index.html" target="_blank">no-01</a><br>
                                        <a href="http://182.162.107.14/NeoCast/index.html" target="_blank">ev-02</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">SKCDN</span> </h3>
                                        <p>
                                        <a href="http://ns1.sk-51.myskcdn.co.kr/neocast-rc/" target="_blank">sk-51</a><br>
                                        <a href="http://ns1.sk-81.myskcdn.co.kr/neocast-rc/" target="_blank">sk-81</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">LGCDN3.0</span> </h3>
                                        <p>
                                        <a href="https://182.162.107.28/tmui/login.jsp?msgcode=2&" target="_blank">F5(gn-61)</a><br>
                                        </p>
                                </div>
                        </div>
                        <div id="tabContent04" class="tabPage">
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">JIRA</span> </h3>
                                        <p>
                                        <a href="https://jira.solbox.com/secure/Dashboard.jspa" target="_blank">Jira</a><br>
                                        <a href="https://wiki.solbox.com/login.action?os_destination=%2Findex.action&permissionViolation=true#recently-viewed">Wiki</a><br>
                                        <a href="https://wiki.solbox.com/display/TCS" target="_blank">CS_Team Wiki</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">serverlist</span> </h3>
                                        <p>
                                        <a href="http://119.206.199.55/svc/ktlist.php" target="_blank">KT serverlist</a><br>
                                        <a href="http://119.206.199.55/svc/lglist.php" target="_blank">LG serverlist</a><br>
                                        <a href="http://119.206.199.55/svc/sklist.php" target="_blank">SK serverlist</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">ADP</span> </h3>
                                        <p>
                                        <a href="https://admin.ktics.com:8443/CAA_svl" target="_blank">KTADP 2.0</a><br>
                                        <a href="https://adp.ktcdn.com:8082/Login" target="_blank">KTADP 3.0</a><br>
                                        <a href="http://admin.xcdn.uplus.co.kr/CZA_svl" target="_blank">LGADP 2.0</a><br>
                                        <a href="https://adp.lgucdn.com/Login" target="_blank">LGADP 3.0</a><br>
                                        <a href="https://adp.myskcdn.co.kr:8443/Login" target="_blank">SKADP</a><br>
                                        <a href="http://adp.kt5gcdn.com/Login" target="_blank">KT5G</a><br>
                                        </p>
                                </div>

                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">양방향 ADP</span> </h3>
                                        <p>
                                        <a href="https://www.ktics.com:8443/Login" target="_blank">KT양방향</a><br>
                                        <a href="http://cs-sms.x-cdn.com:8080/Login" target="_blank">LG양방향</a><br>
                                        <a href="http://cs-sms.myskcdn.co.kr:8082/Login" target="_blank">SK양방향</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">CSP</span> </h3>
                                        <p>
                                        <a href="https://csp.ktcdn.com/Login" target="_blank">KTCSP 2.0</a><br>
                                        <a href="https://csp30.ktcdn.com/Login" target="_blank">KTCSP 3.0</a><br>
                                        <a href="http://csp.xcdn.uplus.co.kr/Login" target="_blank">LGCSP 2.0</a><br>
                                        <a href="https://csp.lgucdn.com/Login" target="_blank">LGCSP 3.0</a><br>
                                        <a href="https://222.239.11.83:8444/Login" target="_blank">SKCSP</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">ibat</span> </h3>
                                        <p>
                                        <a href="http://ibat2.solbox.com/index.html" target="_blank">ibat</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">KT Hedge(vrc, 전원 이중화관련)</span> </h3>
                                        <p>
                                        <a href="http://kt-hedge.mon.solbox.com/" target="_blank">KT Hedge</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">KT VOD Transcoder</span> </h3>
                                        <p>
                                        <a href=http://vas-pms.ktcdn.co.kr:8080/login;PMS_JSESSIONID=FD4CE9E73E5C1E1D3E00BB19CFACBC20" target="_blank">Transcoder</a><br>
                                        </p>
                                </div>
                                <div style="width:299px; height:300px; float:left;">
                                        <h3> <span style="color:red">SMS 발송(SK, LG)</span> </h3>
                                        <p>
                                        <a href=http://sms-api.myskcdn.co.kr/sms_main.php" target="_blank">SMS 발송</a><br>
                                        </p>
                                </div>
                        </div>
                        <div id="tabContent05" class="tabPage">
			<iframe src="notice.php" name="frame_target" style="width:99.7%; height:99.7%"></iframe>
			</div>
                        <div id="tabContent06" class="tabPage">
                        </div>
                        <div id="tabContent07" class="tabPage">
                        </div>
                        <div id="tabContent08" class="tabPage">
                        </div>

                    </div>
                </div>
        </body>




        <!--<p>
                        ism<br>
                        <a href="http://222.122.175.3:8888/index.htm" target="_blank">KTCDN 1.0</a>
                </p> -->

</html>
