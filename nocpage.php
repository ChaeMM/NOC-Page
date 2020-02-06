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

<script language="javascript">
function popup(frm)
{
  var url    = "search.php";
  var title  = "search";
  var status = "toolbar=no,directories=no,scrollbars=no,resizable=no,status=no,menubar=no,width=500, height=400, top=300,left=700";
  window.open("search.php", title,status); //window.open(url,title,status); window.open 함수에 url을 앞에와 같이
                                            //인수로  넣어도 동작에는 지장이 없으나 form.action에서 적용하므로 생략
                                            //가능합니다.
  frm.target = title;                    //form.target 이 부분이 빠지면 form값 전송이 되지 않습니다.
  frm.action = url;                    //form.action 이 부분이 빠지면 action값을 찾지 못해서 제대로 된 팝업이 뜨질 않습니다.
  frm.method = "post";
  frm.submit();
 }
</script>

        <body>
                <br><br><br>
                <h1 style="text-align:center"> NOC Page </h1>
	        <pre>																									 <button id="down" onclick="location.href='./download.php'"> 메뉴얼 다운로드 </button></pre>
                <form name="form"><pre>																							  <input type="text" name="search" value=""> <input type="submit" value="검색" onclick="javascript:popup(this.form)"></pre></form>

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
                                <iframe src="monitoring.php" name="frame_target" style="width:99.7%; height:99.7%"></iframe>
                        </div>

                        <div id="tabContent02" class="tabPage">
                        	<iframe src="streaming.php" name="frame_target" style="width:99.7%; height:99.7%"></iframe>
			</div>
                        <div id="tabContent03" class="tabPage">
				<iframe src="neocast.php" name="frame_target" style="width:99.7%; height:99.7%"></iframe>	
                        </div>
                        <div id="tabContent04" class="tabPage">
                        	<iframe src="use.php" name="frame_target" style="width:99.7%; height:99.7%"></iframe>	
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
