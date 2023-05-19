<?php

// Database configuration
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "it";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if(isset($_POST['submit'])){

  // Get username and password from form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database
  $sql = "SELECT * FROM details WHERE username='$username' AND pass='$password'";
  $result = mysqli_query($conn, $sql);

  // Check if user exists
  if (mysqli_num_rows($result) == 1) {
   ?>

<!-- HTML form -->
<html>
    <head>
    <title>Login Page</title>
        <style>
            body {
                margin: 0;
                background: radial-gradient(circle, #2f2f2f, #191919);
            }
            #login-form {
                position: absolute;
                width: 300px;
                height: 300px;
                top: 30%;
                left:40%;
                transform: translate(-50%, -50%);
                background: #fff;
                padding: 20px;
                box-sizing: border-box;
                border-radius: 8px;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
                animation: float 5s ease-in-out infinite;
            }
            #login-form h2 {
                margin: 0 auto;
                text-align: center;
            }
            #login-form input[type="text"],
            #login-form input[type="password"] {
                display: block;
                box-sizing: border-box;
                margin-bottom: 20px;
                padding: 4px;
                width: 220px;
                height: 32px;
                border: none;
                outline: none;
                border-bottom: 1px solid #aaa;
                font-family: montserrat;
                font-size: 15px;
                font-weight: 400;
                transition: 0.2s ease;
            }
            #login-form input[type="submit"] {
                width: 120px;
                height: 32px;
                background: #2f2f2f;
                border: none;
                outline: none;
                color: #fff;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
                margin-top: 20px;
                border-radius: 8px;
                transition: 0.2s ease;
            }
            #login-form input[type="submit"]:hover {
                background: #1f1f1f;
            }
            #login-form button {
                width: 120px;
                height: 32px;
                background: #2f2f2f;
                border: none;
                outline: none;
                color: #fff;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
                margin-top: 20px;
                border-radius: 8px;
                transition: 0.2s ease;
            }
            #login-form button:hover {
                background: #1f1f1f;
            }
            
            @keyframes float {
                0% {
                    transform: translateY(0px);
                }
                50% {
                    transform: translateY(-20px);
                }
                100% {
                    transform: translateY(0px);
                }
            }
            html {
  height: 100%;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  overflow: hidden;
}

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1045px 639px #FFF , 220px 1984px #FFF , 578px 1467px #FFF , 941px 452px #FFF , 654px 585px #FFF , 1675px 1837px #FFF , 975px 1950px #FFF , 1322px 1003px #FFF , 1119px 1523px #FFF , 1064px 1346px #FFF , 1122px 850px #FFF , 213px 1848px #FFF , 1398px 838px #FFF , 1713px 1983px #FFF , 519px 505px #FFF , 736px 334px #FFF , 407px 452px #FFF , 1347px 645px #FFF , 953px 1640px #FFF , 977px 127px #FFF , 1800px 70px #FFF , 241px 550px #FFF , 1174px 787px #FFF , 665px 1330px #FFF , 1359px 786px #FFF , 407px 1616px #FFF , 273px 355px #FFF , 438px 854px #FFF , 1948px 1321px #FFF , 1219px 701px #FFF , 1747px 1508px #FFF , 1246px 100px #FFF , 168px 633px #FFF , 651px 1265px #FFF , 150px 482px #FFF , 885px 232px #FFF , 232px 758px #FFF , 402px 625px #FFF , 1644px 1174px #FFF , 889px 928px #FFF , 95px 677px #FFF , 1248px 1023px #FFF , 1518px 859px #FFF , 1653px 456px #FFF , 1464px 1586px #FFF , 1803px 696px #FFF , 514px 278px #FFF , 1831px 1926px #FFF , 1661px 1302px #FFF , 1409px 1011px #FFF , 170px 437px #FFF , 905px 1733px #FFF , 428px 1121px #FFF , 1261px 487px #FFF , 194px 1635px #FFF , 532px 1417px #FFF , 543px 1744px #FFF , 1551px 615px #FFF , 893px 350px #FFF , 511px 2000px #FFF , 332px 415px #FFF , 731px 1106px #FFF , 1262px 144px #FFF , 1381px 119px #FFF , 127px 574px #FFF , 894px 1659px #FFF , 485px 860px #FFF , 872px 175px #FFF , 1727px 37px #FFF , 1330px 1432px #FFF , 1396px 1591px #FFF , 1947px 476px #FFF , 1410px 740px #FFF , 1035px 1008px #FFF , 1148px 1474px #FFF , 1503px 1549px #FFF , 1737px 1800px #FFF , 170px 1211px #FFF , 500px 342px #FFF , 1086px 866px #FFF , 518px 1239px #FFF , 237px 491px #FFF , 323px 1360px #FFF , 1135px 1436px #FFF , 1431px 1132px #FFF , 1050px 1050px #FFF , 119px 401px #FFF , 1779px 287px #FFF , 379px 534px #FFF , 435px 73px #FFF , 1273px 1079px #FFF , 1348px 1224px #FFF , 1976px 1491px #FFF , 478px 1986px #FFF , 1942px 1229px #FFF , 1471px 106px #FFF , 421px 1049px #FFF , 99px 1265px #FFF , 1466px 1764px #FFF , 342px 406px #FFF , 1440px 1824px #FFF , 705px 940px #FFF , 301px 413px #FFF , 777px 137px #FFF , 1687px 1921px #FFF , 55px 475px #FFF , 1844px 681px #FFF , 214px 1576px #FFF , 13px 631px #FFF , 172px 690px #FFF , 547px 868px #FFF , 677px 409px #FFF , 129px 394px #FFF , 1323px 800px #FFF , 1289px 1614px #FFF , 1558px 47px #FFF , 828px 472px #FFF , 1785px 961px #FFF , 1602px 951px #FFF , 1739px 568px #FFF , 306px 1435px #FFF , 1596px 1928px #FFF , 1058px 694px #FFF , 424px 1304px #FFF , 1686px 46px #FFF , 762px 571px #FFF , 1865px 1791px #FFF , 199px 1527px #FFF , 1078px 126px #FFF , 663px 1751px #FFF , 356px 756px #FFF , 27px 1159px #FFF , 549px 1166px #FFF , 673px 601px #FFF , 1132px 1017px #FFF , 1385px 506px #FFF , 1946px 1888px #FFF , 409px 701px #FFF , 348px 1912px #FFF , 500px 893px #FFF , 559px 1498px #FFF , 1062px 751px #FFF , 1928px 454px #FFF , 1422px 1196px #FFF , 397px 469px #FFF , 208px 1225px #FFF , 673px 1483px #FFF , 956px 453px #FFF , 405px 1434px #FFF , 1329px 1115px #FFF , 1556px 547px #FFF , 685px 1977px #FFF , 412px 1513px #FFF , 1930px 347px #FFF , 474px 632px #FFF , 1693px 511px #FFF , 693px 1003px #FFF , 702px 253px #FFF , 440px 890px #FFF , 357px 578px #FFF , 942px 1219px #FFF , 1074px 1310px #FFF , 713px 1491px #FFF , 306px 1666px #FFF , 368px 853px #FFF , 788px 1431px #FFF , 1845px 1908px #FFF , 1999px 1174px #FFF , 617px 1020px #FFF , 93px 616px #FFF , 312px 978px #FFF , 925px 477px #FFF , 1235px 845px #FFF , 121px 159px #FFF , 564px 1678px #FFF , 1758px 911px #FFF , 1424px 558px #FFF , 1948px 1936px #FFF , 1695px 175px #FFF , 703px 1494px #FFF , 1172px 427px #FFF , 884px 1524px #FFF , 588px 1727px #FFF , 144px 1277px #FFF , 49px 486px #FFF , 496px 10px #FFF , 1581px 1198px #FFF , 1924px 773px #FFF , 1456px 1743px #FFF , 177px 1972px #FFF , 557px 823px #FFF , 545px 1659px #FFF , 74px 342px #FFF , 144px 242px #FFF , 173px 26px #FFF , 1704px 928px #FFF , 650px 675px #FFF , 1896px 1427px #FFF , 1481px 1760px #FFF , 1665px 1348px #FFF , 141px 1171px #FFF , 779px 1468px #FFF , 373px 1976px #FFF , 416px 872px #FFF , 1129px 1582px #FFF , 1834px 1448px #FFF , 852px 1078px #FFF , 817px 231px #FFF , 1733px 591px #FFF , 39px 1141px #FFF , 168px 13px #FFF , 595px 406px #FFF , 998px 443px #FFF , 169px 634px #FFF , 1680px 1785px #FFF , 1455px 1046px #FFF , 1332px 313px #FFF , 1778px 649px #FFF , 817px 241px #FFF , 716px 1031px #FFF , 1245px 1898px #FFF , 1699px 857px #FFF , 1760px 242px #FFF , 1216px 1266px #FFF , 909px 1973px #FFF , 709px 977px #FFF , 1203px 960px #FFF , 1531px 183px #FFF , 312px 537px #FFF , 1495px 1630px #FFF , 1250px 420px #FFF , 1795px 1077px #FFF , 1351px 386px #FFF , 800px 650px #FFF , 1401px 1356px #FFF , 826px 1941px #FFF , 518px 1675px #FFF , 837px 951px #FFF , 572px 1523px #FFF , 118px 333px #FFF , 1715px 580px #FFF , 679px 946px #FFF , 1205px 760px #FFF , 1157px 57px #FFF , 168px 308px #FFF , 1636px 1016px #FFF , 481px 1732px #FFF , 1168px 540px #FFF , 951px 1567px #FFF , 896px 1788px #FFF , 212px 531px #FFF , 1721px 60px #FFF , 517px 1488px #FFF , 1032px 318px #FFF , 127px 1314px #FFF , 1507px 1977px #FFF , 1904px 649px #FFF , 1271px 590px #FFF , 334px 908px #FFF , 1924px 861px #FFF , 1147px 1220px #FFF , 508px 1253px #FFF , 1113px 1229px #FFF , 409px 1754px #FFF , 154px 1457px #FFF , 522px 1746px #FFF , 1067px 1137px #FFF , 1229px 764px #FFF , 169px 946px #FFF , 1334px 953px #FFF , 1504px 1630px #FFF , 933px 1189px #FFF , 1877px 121px #FFF , 596px 753px #FFF , 1744px 1181px #FFF , 1230px 209px #FFF , 184px 1170px #FFF , 1152px 225px #FFF , 1629px 1272px #FFF , 1064px 1100px #FFF , 635px 1714px #FFF , 615px 1046px #FFF , 546px 853px #FFF , 1715px 837px #FFF , 794px 546px #FFF , 145px 1102px #FFF , 296px 996px #FFF , 1241px 834px #FFF , 18px 364px #FFF , 1022px 820px #FFF , 747px 758px #FFF , 1474px 1556px #FFF , 410px 197px #FFF , 115px 1318px #FFF , 789px 188px #FFF , 462px 1382px #FFF , 1568px 1707px #FFF , 105px 246px #FFF , 443px 1958px #FFF , 906px 1143px #FFF , 1746px 331px #FFF , 220px 326px #FFF , 791px 1896px #FFF , 1591px 616px #FFF , 1044px 1512px #FFF , 476px 1295px #FFF , 984px 68px #FFF , 1170px 1141px #FFF , 314px 318px #FFF , 354px 1560px #FFF , 472px 1931px #FFF , 525px 191px #FFF , 1343px 1930px #FFF , 1375px 1124px #FFF , 131px 281px #FFF , 1199px 835px #FFF , 1127px 173px #FFF , 373px 567px #FFF , 987px 1743px #FFF , 1892px 1216px #FFF , 1929px 983px #FFF , 943px 920px #FFF , 1600px 1045px #FFF , 1580px 3px #FFF , 836px 627px #FFF , 1170px 1508px #FFF , 1830px 1374px #FFF , 975px 242px #FFF , 352px 1944px #FFF , 205px 649px #FFF , 1719px 1422px #FFF , 577px 940px #FFF , 282px 1999px #FFF , 1856px 1981px #FFF , 1321px 1102px #FFF , 1502px 939px #FFF , 1144px 364px #FFF , 303px 181px #FFF , 1897px 1853px #FFF , 555px 833px #FFF , 431px 933px #FFF , 700px 1961px #FFF , 875px 1375px #FFF , 842px 597px #FFF , 1814px 883px #FFF , 470px 64px #FFF , 206px 1190px #FFF , 1636px 937px #FFF , 799px 136px #FFF , 943px 1146px #FFF , 1837px 922px #FFF , 1149px 265px #FFF , 1092px 1760px #FFF , 555px 948px #FFF , 1091px 206px #FFF , 619px 1225px #FFF , 1381px 7px #FFF , 853px 293px #FFF , 1273px 1151px #FFF , 865px 1699px #FFF , 1567px 1573px #FFF , 1218px 10px #FFF , 1033px 991px #FFF , 168px 2000px #FFF , 1698px 1399px #FFF , 1734px 1388px #FFF , 863px 1085px #FFF , 536px 1917px #FFF , 1263px 1293px #FFF , 1009px 426px #FFF , 990px 1241px #FFF , 149px 1533px #FFF , 311px 943px #FFF , 1327px 839px #FFF , 1758px 125px #FFF , 1932px 151px #FFF , 1523px 809px #FFF , 537px 175px #FFF , 1596px 525px #FFF , 1678px 837px #FFF , 1227px 1651px #FFF , 252px 202px #FFF , 1044px 1098px #FFF , 1083px 980px #FFF , 1469px 1709px #FFF , 1295px 686px #FFF , 432px 441px #FFF , 1113px 14px #FFF , 590px 673px #FFF , 1616px 250px #FFF , 1100px 348px #FFF , 1945px 1512px #FFF , 744px 545px #FFF , 636px 1818px #FFF , 1401px 1859px #FFF , 1731px 701px #FFF , 210px 1484px #FFF , 832px 1299px #FFF , 485px 1987px #FFF , 556px 423px #FFF , 1570px 1187px #FFF , 49px 609px #FFF , 672px 244px #FFF , 968px 1229px #FFF , 1268px 1543px #FFF , 362px 137px #FFF , 723px 1745px #FFF , 203px 683px #FFF , 350px 94px #FFF , 1421px 742px #FFF , 618px 731px #FFF , 849px 1495px #FFF , 651px 475px #FFF , 1760px 695px #FFF , 303px 1095px #FFF , 85px 871px #FFF , 1632px 1976px #FFF , 1733px 1202px #FFF , 1650px 1545px #FFF , 834px 514px #FFF , 547px 152px #FFF , 1450px 828px #FFF , 568px 174px #FFF , 951px 1642px #FFF , 825px 584px #FFF , 538px 1968px #FFF , 1738px 857px #FFF , 1564px 316px #FFF , 1405px 9px #FFF , 990px 804px #FFF , 248px 1627px #FFF , 245px 543px #FFF , 1634px 1487px #FFF , 1594px 1901px #FFF , 59px 1710px #FFF , 414px 514px #FFF , 1480px 1945px #FFF , 359px 1925px #FFF , 1337px 1482px #FFF , 1000px 1371px #FFF , 1149px 1375px #FFF , 989px 803px #FFF , 901px 1641px #FFF , 1996px 1477px #FFF , 1023px 810px #FFF , 454px 1081px #FFF , 127px 1313px #FFF , 1744px 782px #FFF , 147px 148px #FFF , 1779px 566px #FFF , 455px 699px #FFF , 24px 264px #FFF , 1325px 761px #FFF , 729px 1293px #FFF , 1841px 764px #FFF , 394px 1122px #FFF , 1682px 1156px #FFF , 1369px 1481px #FFF , 1474px 1455px #FFF , 713px 282px #FFF , 1957px 779px #FFF , 1551px 684px #FFF , 1629px 1027px #FFF , 1677px 1358px #FFF , 1573px 1379px #FFF , 670px 1521px #FFF , 34px 513px #FFF , 1753px 72px #FFF , 1785px 589px #FFF , 132px 1875px #FFF , 1167px 1443px #FFF , 771px 1025px #FFF , 486px 1795px #FFF , 1124px 861px #FFF , 704px 71px #FFF , 1149px 1787px #FFF , 1118px 178px #FFF , 1151px 949px #FFF , 1034px 909px #FFF , 1054px 874px #FFF , 228px 1773px #FFF , 216px 1868px #FFF , 244px 656px #FFF , 516px 1415px #FFF , 1779px 1954px #FFF , 1563px 651px #FFF , 450px 439px #FFF , 1679px 1286px #FFF , 945px 1678px #FFF , 1201px 1765px #FFF , 408px 1343px #FFF , 1031px 1984px #FFF , 1752px 114px #FFF , 1116px 521px #FFF , 309px 643px #FFF , 1145px 569px #FFF , 548px 989px #FFF , 1433px 521px #FFF , 1218px 260px #FFF , 167px 626px #FFF , 1914px 713px #FFF , 532px 1217px #FFF , 418px 1000px #FFF , 876px 981px #FFF , 685px 686px #FFF , 1331px 1229px #FFF , 1434px 1966px #FFF , 420px 347px #FFF , 308px 589px #FFF , 940px 1693px #FFF , 463px 1858px #FFF , 905px 393px #FFF , 620px 699px #FFF , 834px 729px #FFF , 1453px 163px #FFF , 776px 1432px #FFF , 1074px 295px #FFF , 869px 446px #FFF , 1702px 474px #FFF , 573px 1555px #FFF , 996px 772px #FFF , 926px 1546px #FFF , 1753px 1367px #FFF , 178px 356px #FFF , 1158px 1685px #FFF , 546px 25px #FFF , 976px 346px #FFF , 1143px 602px #FFF , 1460px 328px #FFF , 1691px 109px #FFF , 900px 1009px #FFF , 634px 679px #FFF , 516px 1779px #FFF , 1253px 1570px #FFF , 157px 568px #FFF , 1692px 1453px #FFF , 1799px 352px #FFF , 845px 1324px #FFF , 344px 1825px #FFF , 1479px 919px #FFF , 1884px 430px #FFF , 1244px 1625px #FFF , 1796px 1544px #FFF , 63px 1442px #FFF , 172px 1050px #FFF , 1198px 1213px #FFF , 363px 1058px #FFF , 620px 1225px #FFF , 963px 979px #FFF , 1652px 1506px #FFF , 996px 1046px #FFF , 1046px 1437px #FFF , 1489px 1283px #FFF , 16px 1589px #FFF , 89px 868px #FFF , 1508px 394px #FFF , 663px 1373px #FFF , 584px 1744px #FFF , 243px 871px #FFF , 198px 146px #FFF , 722px 615px #FFF , 731px 1396px #FFF , 69px 895px #FFF , 1691px 1701px #FFF , 409px 1679px #FFF , 485px 182px #FFF , 985px 1809px #FFF , 1038px 195px #FFF , 1900px 1683px #FFF , 1069px 75px #FFF , 292px 1533px #FFF , 539px 732px #FFF , 1280px 1011px #FFF , 1006px 1431px #FFF , 479px 416px #FFF , 829px 939px #FFF , 578px 1991px #FFF , 1794px 1826px #FFF , 1191px 1260px #FFF , 1213px 1471px #FFF , 742px 774px #FFF , 1289px 1293px #FFF , 341px 68px #FFF , 1030px 1126px #FFF , 513px 723px #FFF , 846px 213px #FFF , 106px 1985px #FFF , 116px 1914px #FFF , 1252px 82px #FFF , 456px 1210px #FFF , 1988px 128px #FFF , 1449px 579px #FFF , 664px 510px #FFF , 752px 590px #FFF , 551px 256px #FFF , 164px 1813px #FFF , 427px 1482px #FFF , 329px 1762px #FFF , 1373px 1038px #FFF , 1370px 1258px #FFF , 694px 162px #FFF , 397px 1951px #FFF , 654px 567px #FFF , 785px 1166px #FFF , 955px 1928px #FFF , 345px 627px #FFF , 118px 1724px #FFF , 132px 1326px #FFF , 733px 1189px #FFF , 540px 863px #FFF , 189px 672px #FFF , 834px 1863px #FFF , 524px 1995px #FFF , 1960px 1153px #FFF , 1114px 527px #FFF , 571px 1288px #FFF , 1515px 397px #FFF , 960px 689px #FFF , 1804px 1905px #FFF , 1980px 1227px #FFF , 143px 80px #FFF , 1526px 482px #FFF , 611px 542px #FFF , 839px 867px #FFF , 1977px 329px #FFF , 531px 1065px #FFF , 1543px 10px #FFF , 428px 1717px #FFF , 526px 7px #FFF , 962px 153px #FFF , 544px 191px #FFF , 598px 868px #FFF , 1297px 431px #FFF , 491px 1344px #FFF , 1059px 1503px #FFF , 238px 1422px #FFF , 1176px 504px #FFF , 1846px 426px #FFF , 1519px 111px #FFF , 294px 1723px #FFF , 75px 1278px #FFF , 287px 1894px #FFF , 394px 678px #FFF , 83px 1293px #FFF , 578px 1048px #FFF , 833px 237px #FFF , 1392px 1336px #FFF , 1923px 1878px #FFF , 1953px 1976px #FFF , 653px 361px #FFF , 1393px 664px #FFF , 484px 430px #FFF , 966px 466px #FFF , 225px 1624px #FFF , 478px 817px #FFF , 464px 1618px #FFF , 1443px 410px #FFF , 994px 1614px #FFF , 138px 481px #FFF , 996px 1370px #FFF , 1479px 1118px #FFF , 867px 761px #FFF , 1554px 1539px #FFF , 1048px 1954px #FFF , 576px 581px #FFF , 692px 1578px #FFF , 1594px 1671px #FFF , 1759px 117px #FFF , 1515px 1011px #FFF , 1925px 1121px #FFF , 605px 650px #FFF , 1828px 1928px #FFF , 635px 1439px #FFF , 1257px 555px #FFF , 1841px 1031px #FFF , 897px 244px #FFF , 242px 1210px #FFF , 1408px 1372px #FFF , 19px 1318px #FFF , 564px 1306px #FFF , 49px 474px #FFF , 1114px 382px #FFF , 920px 1760px #FFF , 1207px 403px #FFF , 1841px 1128px #FFF , 693px 68px #FFF , 1440px 367px #FFF , 1448px 233px #FFF , 314px 888px #FFF , 598px 1504px #FFF , 49px 1149px #FFF , 1785px 349px #FFF , 1576px 1733px #FFF , 1766px 873px #FFF , 554px 212px #FFF , 552px 1304px #FFF , 573px 1552px #FFF , 613px 1702px #FFF , 552px 1630px #FFF , 891px 1636px #FFF;
  animation: animStar 50s linear infinite;
}
#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  background:transparent;
  box-shadow: 1045px 639px #FFF , 220px 1984px #FFF , 578px 1467px #FFF , 941px 452px #FFF , 654px 585px #FFF , 1675px 1837px #FFF , 975px 1950px #FFF , 1322px 1003px #FFF , 1119px 1523px #FFF , 1064px 1346px #FFF , 1122px 850px #FFF , 213px 1848px #FFF , 1398px 838px #FFF , 1713px 1983px #FFF , 519px 505px #FFF , 736px 334px #FFF , 407px 452px #FFF , 1347px 645px #FFF , 953px 1640px #FFF , 977px 127px #FFF , 1800px 70px #FFF , 241px 550px #FFF , 1174px 787px #FFF , 665px 1330px #FFF , 1359px 786px #FFF , 407px 1616px #FFF , 273px 355px #FFF , 438px 854px #FFF , 1948px 1321px #FFF , 1219px 701px #FFF , 1747px 1508px #FFF , 1246px 100px #FFF , 168px 633px #FFF , 651px 1265px #FFF , 150px 482px #FFF , 885px 232px #FFF , 232px 758px #FFF , 402px 625px #FFF , 1644px 1174px #FFF , 889px 928px #FFF , 95px 677px #FFF , 1248px 1023px #FFF , 1518px 859px #FFF , 1653px 456px #FFF , 1464px 1586px #FFF , 1803px 696px #FFF , 514px 278px #FFF , 1831px 1926px #FFF , 1661px 1302px #FFF , 1409px 1011px #FFF , 170px 437px #FFF , 905px 1733px #FFF , 428px 1121px #FFF , 1261px 487px #FFF , 194px 1635px #FFF , 532px 1417px #FFF , 543px 1744px #FFF , 1551px 615px #FFF , 893px 350px #FFF , 511px 2000px #FFF , 332px 415px #FFF , 731px 1106px #FFF , 1262px 144px #FFF , 1381px 119px #FFF , 127px 574px #FFF , 894px 1659px #FFF , 485px 860px #FFF , 872px 175px #FFF , 1727px 37px #FFF , 1330px 1432px #FFF , 1396px 1591px #FFF , 1947px 476px #FFF , 1410px 740px #FFF , 1035px 1008px #FFF , 1148px 1474px #FFF , 1503px 1549px #FFF , 1737px 1800px #FFF , 170px 1211px #FFF , 500px 342px #FFF , 1086px 866px #FFF , 518px 1239px #FFF , 237px 491px #FFF , 323px 1360px #FFF , 1135px 1436px #FFF , 1431px 1132px #FFF , 1050px 1050px #FFF , 119px 401px #FFF , 1779px 287px #FFF , 379px 534px #FFF , 435px 73px #FFF , 1273px 1079px #FFF , 1348px 1224px #FFF , 1976px 1491px #FFF , 478px 1986px #FFF , 1942px 1229px #FFF , 1471px 106px #FFF , 421px 1049px #FFF , 99px 1265px #FFF , 1466px 1764px #FFF , 342px 406px #FFF , 1440px 1824px #FFF , 705px 940px #FFF , 301px 413px #FFF , 777px 137px #FFF , 1687px 1921px #FFF , 55px 475px #FFF , 1844px 681px #FFF , 214px 1576px #FFF , 13px 631px #FFF , 172px 690px #FFF , 547px 868px #FFF , 677px 409px #FFF , 129px 394px #FFF , 1323px 800px #FFF , 1289px 1614px #FFF , 1558px 47px #FFF , 828px 472px #FFF , 1785px 961px #FFF , 1602px 951px #FFF , 1739px 568px #FFF , 306px 1435px #FFF , 1596px 1928px #FFF , 1058px 694px #FFF , 424px 1304px #FFF , 1686px 46px #FFF , 762px 571px #FFF , 1865px 1791px #FFF , 199px 1527px #FFF , 1078px 126px #FFF , 663px 1751px #FFF , 356px 756px #FFF , 27px 1159px #FFF , 549px 1166px #FFF , 673px 601px #FFF , 1132px 1017px #FFF , 1385px 506px #FFF , 1946px 1888px #FFF , 409px 701px #FFF , 348px 1912px #FFF , 500px 893px #FFF , 559px 1498px #FFF , 1062px 751px #FFF , 1928px 454px #FFF , 1422px 1196px #FFF , 397px 469px #FFF , 208px 1225px #FFF , 673px 1483px #FFF , 956px 453px #FFF , 405px 1434px #FFF , 1329px 1115px #FFF , 1556px 547px #FFF , 685px 1977px #FFF , 412px 1513px #FFF , 1930px 347px #FFF , 474px 632px #FFF , 1693px 511px #FFF , 693px 1003px #FFF , 702px 253px #FFF , 440px 890px #FFF , 357px 578px #FFF , 942px 1219px #FFF , 1074px 1310px #FFF , 713px 1491px #FFF , 306px 1666px #FFF , 368px 853px #FFF , 788px 1431px #FFF , 1845px 1908px #FFF , 1999px 1174px #FFF , 617px 1020px #FFF , 93px 616px #FFF , 312px 978px #FFF , 925px 477px #FFF , 1235px 845px #FFF , 121px 159px #FFF , 564px 1678px #FFF , 1758px 911px #FFF , 1424px 558px #FFF , 1948px 1936px #FFF , 1695px 175px #FFF , 703px 1494px #FFF , 1172px 427px #FFF , 884px 1524px #FFF , 588px 1727px #FFF , 144px 1277px #FFF , 49px 486px #FFF , 496px 10px #FFF , 1581px 1198px #FFF , 1924px 773px #FFF , 1456px 1743px #FFF , 177px 1972px #FFF , 557px 823px #FFF , 545px 1659px #FFF , 74px 342px #FFF , 144px 242px #FFF , 173px 26px #FFF , 1704px 928px #FFF , 650px 675px #FFF , 1896px 1427px #FFF , 1481px 1760px #FFF , 1665px 1348px #FFF , 141px 1171px #FFF , 779px 1468px #FFF , 373px 1976px #FFF , 416px 872px #FFF , 1129px 1582px #FFF , 1834px 1448px #FFF , 852px 1078px #FFF , 817px 231px #FFF , 1733px 591px #FFF , 39px 1141px #FFF , 168px 13px #FFF , 595px 406px #FFF , 998px 443px #FFF , 169px 634px #FFF , 1680px 1785px #FFF , 1455px 1046px #FFF , 1332px 313px #FFF , 1778px 649px #FFF , 817px 241px #FFF , 716px 1031px #FFF , 1245px 1898px #FFF , 1699px 857px #FFF , 1760px 242px #FFF , 1216px 1266px #FFF , 909px 1973px #FFF , 709px 977px #FFF , 1203px 960px #FFF , 1531px 183px #FFF , 312px 537px #FFF , 1495px 1630px #FFF , 1250px 420px #FFF , 1795px 1077px #FFF , 1351px 386px #FFF , 800px 650px #FFF , 1401px 1356px #FFF , 826px 1941px #FFF , 518px 1675px #FFF , 837px 951px #FFF , 572px 1523px #FFF , 118px 333px #FFF , 1715px 580px #FFF , 679px 946px #FFF , 1205px 760px #FFF , 1157px 57px #FFF , 168px 308px #FFF , 1636px 1016px #FFF , 481px 1732px #FFF , 1168px 540px #FFF , 951px 1567px #FFF , 896px 1788px #FFF , 212px 531px #FFF , 1721px 60px #FFF , 517px 1488px #FFF , 1032px 318px #FFF , 127px 1314px #FFF , 1507px 1977px #FFF , 1904px 649px #FFF , 1271px 590px #FFF , 334px 908px #FFF , 1924px 861px #FFF , 1147px 1220px #FFF , 508px 1253px #FFF , 1113px 1229px #FFF , 409px 1754px #FFF , 154px 1457px #FFF , 522px 1746px #FFF , 1067px 1137px #FFF , 1229px 764px #FFF , 169px 946px #FFF , 1334px 953px #FFF , 1504px 1630px #FFF , 933px 1189px #FFF , 1877px 121px #FFF , 596px 753px #FFF , 1744px 1181px #FFF , 1230px 209px #FFF , 184px 1170px #FFF , 1152px 225px #FFF , 1629px 1272px #FFF , 1064px 1100px #FFF , 635px 1714px #FFF , 615px 1046px #FFF , 546px 853px #FFF , 1715px 837px #FFF , 794px 546px #FFF , 145px 1102px #FFF , 296px 996px #FFF , 1241px 834px #FFF , 18px 364px #FFF , 1022px 820px #FFF , 747px 758px #FFF , 1474px 1556px #FFF , 410px 197px #FFF , 115px 1318px #FFF , 789px 188px #FFF , 462px 1382px #FFF , 1568px 1707px #FFF , 105px 246px #FFF , 443px 1958px #FFF , 906px 1143px #FFF , 1746px 331px #FFF , 220px 326px #FFF , 791px 1896px #FFF , 1591px 616px #FFF , 1044px 1512px #FFF , 476px 1295px #FFF , 984px 68px #FFF , 1170px 1141px #FFF , 314px 318px #FFF , 354px 1560px #FFF , 472px 1931px #FFF , 525px 191px #FFF , 1343px 1930px #FFF , 1375px 1124px #FFF , 131px 281px #FFF , 1199px 835px #FFF , 1127px 173px #FFF , 373px 567px #FFF , 987px 1743px #FFF , 1892px 1216px #FFF , 1929px 983px #FFF , 943px 920px #FFF , 1600px 1045px #FFF , 1580px 3px #FFF , 836px 627px #FFF , 1170px 1508px #FFF , 1830px 1374px #FFF , 975px 242px #FFF , 352px 1944px #FFF , 205px 649px #FFF , 1719px 1422px #FFF , 577px 940px #FFF , 282px 1999px #FFF , 1856px 1981px #FFF , 1321px 1102px #FFF , 1502px 939px #FFF , 1144px 364px #FFF , 303px 181px #FFF , 1897px 1853px #FFF , 555px 833px #FFF , 431px 933px #FFF , 700px 1961px #FFF , 875px 1375px #FFF , 842px 597px #FFF , 1814px 883px #FFF , 470px 64px #FFF , 206px 1190px #FFF , 1636px 937px #FFF , 799px 136px #FFF , 943px 1146px #FFF , 1837px 922px #FFF , 1149px 265px #FFF , 1092px 1760px #FFF , 555px 948px #FFF , 1091px 206px #FFF , 619px 1225px #FFF , 1381px 7px #FFF , 853px 293px #FFF , 1273px 1151px #FFF , 865px 1699px #FFF , 1567px 1573px #FFF , 1218px 10px #FFF , 1033px 991px #FFF , 168px 2000px #FFF , 1698px 1399px #FFF , 1734px 1388px #FFF , 863px 1085px #FFF , 536px 1917px #FFF , 1263px 1293px #FFF , 1009px 426px #FFF , 990px 1241px #FFF , 149px 1533px #FFF , 311px 943px #FFF , 1327px 839px #FFF , 1758px 125px #FFF , 1932px 151px #FFF , 1523px 809px #FFF , 537px 175px #FFF , 1596px 525px #FFF , 1678px 837px #FFF , 1227px 1651px #FFF , 252px 202px #FFF , 1044px 1098px #FFF , 1083px 980px #FFF , 1469px 1709px #FFF , 1295px 686px #FFF , 432px 441px #FFF , 1113px 14px #FFF , 590px 673px #FFF , 1616px 250px #FFF , 1100px 348px #FFF , 1945px 1512px #FFF , 744px 545px #FFF , 636px 1818px #FFF , 1401px 1859px #FFF , 1731px 701px #FFF , 210px 1484px #FFF , 832px 1299px #FFF , 485px 1987px #FFF , 556px 423px #FFF , 1570px 1187px #FFF , 49px 609px #FFF , 672px 244px #FFF , 968px 1229px #FFF , 1268px 1543px #FFF , 362px 137px #FFF , 723px 1745px #FFF , 203px 683px #FFF , 350px 94px #FFF , 1421px 742px #FFF , 618px 731px #FFF , 849px 1495px #FFF , 651px 475px #FFF , 1760px 695px #FFF , 303px 1095px #FFF , 85px 871px #FFF , 1632px 1976px #FFF , 1733px 1202px #FFF , 1650px 1545px #FFF , 834px 514px #FFF , 547px 152px #FFF , 1450px 828px #FFF , 568px 174px #FFF , 951px 1642px #FFF , 825px 584px #FFF , 538px 1968px #FFF , 1738px 857px #FFF , 1564px 316px #FFF , 1405px 9px #FFF , 990px 804px #FFF , 248px 1627px #FFF , 245px 543px #FFF , 1634px 1487px #FFF , 1594px 1901px #FFF , 59px 1710px #FFF , 414px 514px #FFF , 1480px 1945px #FFF , 359px 1925px #FFF , 1337px 1482px #FFF , 1000px 1371px #FFF , 1149px 1375px #FFF , 989px 803px #FFF , 901px 1641px #FFF , 1996px 1477px #FFF , 1023px 810px #FFF , 454px 1081px #FFF , 127px 1313px #FFF , 1744px 782px #FFF , 147px 148px #FFF , 1779px 566px #FFF , 455px 699px #FFF , 24px 264px #FFF , 1325px 761px #FFF , 729px 1293px #FFF , 1841px 764px #FFF , 394px 1122px #FFF , 1682px 1156px #FFF , 1369px 1481px #FFF , 1474px 1455px #FFF , 713px 282px #FFF , 1957px 779px #FFF , 1551px 684px #FFF , 1629px 1027px #FFF , 1677px 1358px #FFF , 1573px 1379px #FFF , 670px 1521px #FFF , 34px 513px #FFF , 1753px 72px #FFF , 1785px 589px #FFF , 132px 1875px #FFF , 1167px 1443px #FFF , 771px 1025px #FFF , 486px 1795px #FFF , 1124px 861px #FFF , 704px 71px #FFF , 1149px 1787px #FFF , 1118px 178px #FFF , 1151px 949px #FFF , 1034px 909px #FFF , 1054px 874px #FFF , 228px 1773px #FFF , 216px 1868px #FFF , 244px 656px #FFF , 516px 1415px #FFF , 1779px 1954px #FFF , 1563px 651px #FFF , 450px 439px #FFF , 1679px 1286px #FFF , 945px 1678px #FFF , 1201px 1765px #FFF , 408px 1343px #FFF , 1031px 1984px #FFF , 1752px 114px #FFF , 1116px 521px #FFF , 309px 643px #FFF , 1145px 569px #FFF , 548px 989px #FFF , 1433px 521px #FFF , 1218px 260px #FFF , 167px 626px #FFF , 1914px 713px #FFF , 532px 1217px #FFF , 418px 1000px #FFF , 876px 981px #FFF , 685px 686px #FFF , 1331px 1229px #FFF , 1434px 1966px #FFF , 420px 347px #FFF , 308px 589px #FFF , 940px 1693px #FFF , 463px 1858px #FFF , 905px 393px #FFF , 620px 699px #FFF , 834px 729px #FFF , 1453px 163px #FFF , 776px 1432px #FFF , 1074px 295px #FFF , 869px 446px #FFF , 1702px 474px #FFF , 573px 1555px #FFF , 996px 772px #FFF , 926px 1546px #FFF , 1753px 1367px #FFF , 178px 356px #FFF , 1158px 1685px #FFF , 546px 25px #FFF , 976px 346px #FFF , 1143px 602px #FFF , 1460px 328px #FFF , 1691px 109px #FFF , 900px 1009px #FFF , 634px 679px #FFF , 516px 1779px #FFF , 1253px 1570px #FFF , 157px 568px #FFF , 1692px 1453px #FFF , 1799px 352px #FFF , 845px 1324px #FFF , 344px 1825px #FFF , 1479px 919px #FFF , 1884px 430px #FFF , 1244px 1625px #FFF , 1796px 1544px #FFF , 63px 1442px #FFF , 172px 1050px #FFF , 1198px 1213px #FFF , 363px 1058px #FFF , 620px 1225px #FFF , 963px 979px #FFF , 1652px 1506px #FFF , 996px 1046px #FFF , 1046px 1437px #FFF , 1489px 1283px #FFF , 16px 1589px #FFF , 89px 868px #FFF , 1508px 394px #FFF , 663px 1373px #FFF , 584px 1744px #FFF , 243px 871px #FFF , 198px 146px #FFF , 722px 615px #FFF , 731px 1396px #FFF , 69px 895px #FFF , 1691px 1701px #FFF , 409px 1679px #FFF , 485px 182px #FFF , 985px 1809px #FFF , 1038px 195px #FFF , 1900px 1683px #FFF , 1069px 75px #FFF , 292px 1533px #FFF , 539px 732px #FFF , 1280px 1011px #FFF , 1006px 1431px #FFF , 479px 416px #FFF , 829px 939px #FFF , 578px 1991px #FFF , 1794px 1826px #FFF , 1191px 1260px #FFF , 1213px 1471px #FFF , 742px 774px #FFF , 1289px 1293px #FFF , 341px 68px #FFF , 1030px 1126px #FFF , 513px 723px #FFF , 846px 213px #FFF , 106px 1985px #FFF , 116px 1914px #FFF , 1252px 82px #FFF , 456px 1210px #FFF , 1988px 128px #FFF , 1449px 579px #FFF , 664px 510px #FFF , 752px 590px #FFF , 551px 256px #FFF , 164px 1813px #FFF , 427px 1482px #FFF , 329px 1762px #FFF , 1373px 1038px #FFF , 1370px 1258px #FFF , 694px 162px #FFF , 397px 1951px #FFF , 654px 567px #FFF , 785px 1166px #FFF , 955px 1928px #FFF , 345px 627px #FFF , 118px 1724px #FFF , 132px 1326px #FFF , 733px 1189px #FFF , 540px 863px #FFF , 189px 672px #FFF , 834px 1863px #FFF , 524px 1995px #FFF , 1960px 1153px #FFF , 1114px 527px #FFF , 571px 1288px #FFF , 1515px 397px #FFF , 960px 689px #FFF , 1804px 1905px #FFF , 1980px 1227px #FFF , 143px 80px #FFF , 1526px 482px #FFF , 611px 542px #FFF , 839px 867px #FFF , 1977px 329px #FFF , 531px 1065px #FFF , 1543px 10px #FFF , 428px 1717px #FFF , 526px 7px #FFF , 962px 153px #FFF , 544px 191px #FFF , 598px 868px #FFF , 1297px 431px #FFF , 491px 1344px #FFF , 1059px 1503px #FFF , 238px 1422px #FFF , 1176px 504px #FFF , 1846px 426px #FFF , 1519px 111px #FFF , 294px 1723px #FFF , 75px 1278px #FFF , 287px 1894px #FFF , 394px 678px #FFF , 83px 1293px #FFF , 578px 1048px #FFF , 833px 237px #FFF , 1392px 1336px #FFF , 1923px 1878px #FFF , 1953px 1976px #FFF , 653px 361px #FFF , 1393px 664px #FFF , 484px 430px #FFF , 966px 466px #FFF , 225px 1624px #FFF , 478px 817px #FFF , 464px 1618px #FFF , 1443px 410px #FFF , 994px 1614px #FFF , 138px 481px #FFF , 996px 1370px #FFF , 1479px 1118px #FFF , 867px 761px #FFF , 1554px 1539px #FFF , 1048px 1954px #FFF , 576px 581px #FFF , 692px 1578px #FFF , 1594px 1671px #FFF , 1759px 117px #FFF , 1515px 1011px #FFF , 1925px 1121px #FFF , 605px 650px #FFF , 1828px 1928px #FFF , 635px 1439px #FFF , 1257px 555px #FFF , 1841px 1031px #FFF , 897px 244px #FFF , 242px 1210px #FFF , 1408px 1372px #FFF , 19px 1318px #FFF , 564px 1306px #FFF , 49px 474px #FFF , 1114px 382px #FFF , 920px 1760px #FFF , 1207px 403px #FFF , 1841px 1128px #FFF , 693px 68px #FFF , 1440px 367px #FFF , 1448px 233px #FFF , 314px 888px #FFF , 598px 1504px #FFF , 49px 1149px #FFF , 1785px 349px #FFF , 1576px 1733px #FFF , 1766px 873px #FFF , 554px 212px #FFF , 552px 1304px #FFF , 573px 1552px #FFF , 613px 1702px #FFF , 552px 1630px #FFF , 891px 1636px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 1197px 1814px #FFF , 1989px 1296px #FFF , 1063px 1283px #FFF , 1901px 1322px #FFF , 1125px 1575px #FFF , 1311px 928px #FFF , 1508px 715px #FFF , 382px 1830px #FFF , 1292px 122px #FFF , 325px 1718px #FFF , 1575px 1230px #FFF , 1011px 1635px #FFF , 1165px 1555px #FFF , 1266px 263px #FFF , 1320px 61px #FFF , 365px 1156px #FFF , 686px 1171px #FFF , 1067px 1745px #FFF , 227px 527px #FFF , 807px 791px #FFF , 1889px 377px #FFF , 1355px 1524px #FFF , 1212px 24px #FFF , 433px 836px #FFF , 1401px 867px #FFF , 845px 1219px #FFF , 366px 1697px #FFF , 471px 1093px #FFF , 490px 1160px #FFF , 437px 392px #FFF , 847px 1285px #FFF , 1552px 193px #FFF , 740px 1546px #FFF , 722px 709px #FFF , 652px 1864px #FFF , 539px 41px #FFF , 248px 399px #FFF , 1654px 153px #FFF , 587px 419px #FFF , 1268px 520px #FFF , 1644px 1572px #FFF , 205px 861px #FFF , 1871px 1327px #FFF , 1133px 933px #FFF , 1928px 883px #FFF , 401px 1364px #FFF , 585px 1170px #FFF , 1346px 194px #FFF , 1874px 1751px #FFF , 825px 1887px #FFF , 833px 1103px #FFF , 55px 1475px #FFF , 1794px 367px #FFF , 1256px 430px #FFF , 1333px 152px #FFF , 1200px 1571px #FFF , 1524px 100px #FFF , 1926px 660px #FFF , 575px 1616px #FFF , 1155px 710px #FFF , 1796px 1465px #FFF , 394px 759px #FFF , 1196px 688px #FFF , 944px 457px #FFF , 1830px 487px #FFF , 1527px 241px #FFF , 1889px 1999px #FFF , 665px 924px #FFF , 176px 233px #FFF , 833px 826px #FFF , 212px 1299px #FFF , 1463px 1352px #FFF , 1099px 1440px #FFF , 857px 1483px #FFF , 301px 1546px #FFF , 1433px 793px #FFF , 1177px 864px #FFF , 277px 898px #FFF , 1012px 374px #FFF , 962px 1934px #FFF , 514px 570px #FFF , 1550px 1849px #FFF , 880px 1244px #FFF , 564px 311px #FFF , 1507px 1412px #FFF , 151px 1697px #FFF , 1771px 1584px #FFF , 1791px 573px #FFF , 109px 1906px #FFF , 1183px 1937px #FFF , 1064px 1321px #FFF , 1985px 45px #FFF , 1713px 515px #FFF , 462px 1372px #FFF , 1744px 446px #FFF , 99px 563px #FFF , 1734px 1659px #FFF , 1270px 1003px #FFF , 483px 923px #FFF , 65px 805px #FFF , 1058px 961px #FFF , 678px 1245px #FFF , 1284px 343px #FFF , 1375px 878px #FFF , 1331px 168px #FFF , 968px 1676px #FFF , 1068px 1568px #FFF , 236px 168px #FFF , 1549px 1176px #FFF , 36px 852px #FFF , 938px 1421px #FFF , 1514px 1325px #FFF , 803px 473px #FFF , 401px 1979px #FFF , 882px 1301px #FFF , 2000px 454px #FFF , 1989px 1259px #FFF , 463px 938px #FFF , 54px 780px #FFF , 243px 1268px #FFF , 1043px 1648px #FFF , 379px 358px #FFF , 763px 591px #FFF , 1105px 1462px #FFF , 875px 1602px #FFF , 157px 298px #FFF , 1519px 1162px #FFF , 878px 1134px #FFF , 210px 649px #FFF , 29px 1197px #FFF , 292px 939px #FFF , 934px 863px #FFF , 1200px 1530px #FFF , 1417px 1732px #FFF , 1554px 645px #FFF , 1504px 829px #FFF , 1374px 1881px #FFF , 806px 1216px #FFF , 939px 1554px #FFF , 1971px 1976px #FFF , 1184px 938px #FFF , 922px 1318px #FFF , 1708px 1883px #FFF , 318px 746px #FFF , 291px 559px #FFF , 1028px 1591px #FFF , 1410px 90px #FFF , 1492px 916px #FFF , 376px 527px #FFF , 1252px 1419px #FFF , 829px 1303px #FFF , 352px 1376px #FFF , 1487px 1703px #FFF , 302px 515px #FFF , 237px 1438px #FFF , 1704px 1087px #FFF , 1340px 328px #FFF , 1837px 1694px #FFF , 421px 1970px #FFF , 1401px 736px #FFF , 750px 1393px #FFF , 313px 852px #FFF , 1908px 1195px #FFF , 1955px 1563px #FFF , 1891px 1070px #FFF , 1323px 442px #FFF , 1731px 993px #FFF , 1797px 210px #FFF , 1046px 865px #FFF , 1059px 1349px #FFF , 969px 84px #FFF , 914px 1435px #FFF , 197px 1752px #FFF , 241px 664px #FFF , 1236px 106px #FFF , 1015px 1942px #FFF , 1784px 1173px #FFF , 1610px 1572px #FFF , 1111px 533px #FFF , 1078px 869px #FFF , 1563px 1891px #FFF , 875px 601px #FFF , 1706px 777px #FFF , 1106px 884px #FFF , 1672px 294px #FFF , 181px 1770px #FFF , 1105px 1827px #FFF , 690px 506px #FFF , 1611px 1258px #FFF , 192px 1679px #FFF , 306px 227px #FFF , 1865px 247px #FFF , 1722px 224px #FFF , 1268px 772px #FFF , 1372px 974px #FFF , 262px 1156px #FFF , 179px 1432px #FFF , 713px 1899px #FFF , 1933px 1651px #FFF , 947px 932px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after{
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 1197px 1814px #FFF , 1989px 1296px #FFF , 1063px 1283px #FFF , 1901px 1322px #FFF , 1125px 1575px #FFF , 1311px 928px #FFF , 1508px 715px #FFF , 382px 1830px #FFF , 1292px 122px #FFF , 325px 1718px #FFF , 1575px 1230px #FFF , 1011px 1635px #FFF , 1165px 1555px #FFF , 1266px 263px #FFF , 1320px 61px #FFF , 365px 1156px #FFF , 686px 1171px #FFF , 1067px 1745px #FFF , 227px 527px #FFF , 807px 791px #FFF , 1889px 377px #FFF , 1355px 1524px #FFF , 1212px 24px #FFF , 433px 836px #FFF , 1401px 867px #FFF , 845px 1219px #FFF , 366px 1697px #FFF , 471px 1093px #FFF , 490px 1160px #FFF , 437px 392px #FFF , 847px 1285px #FFF , 1552px 193px #FFF , 740px 1546px #FFF , 722px 709px #FFF , 652px 1864px #FFF , 539px 41px #FFF , 248px 399px #FFF , 1654px 153px #FFF , 587px 419px #FFF , 1268px 520px #FFF , 1644px 1572px #FFF , 205px 861px #FFF , 1871px 1327px #FFF , 1133px 933px #FFF , 1928px 883px #FFF , 401px 1364px #FFF , 585px 1170px #FFF , 1346px 194px #FFF , 1874px 1751px #FFF , 825px 1887px #FFF , 833px 1103px #FFF , 55px 1475px #FFF , 1794px 367px #FFF , 1256px 430px #FFF , 1333px 152px #FFF , 1200px 1571px #FFF , 1524px 100px #FFF , 1926px 660px #FFF , 575px 1616px #FFF , 1155px 710px #FFF , 1796px 1465px #FFF , 394px 759px #FFF , 1196px 688px #FFF , 944px 457px #FFF , 1830px 487px #FFF , 1527px 241px #FFF , 1889px 1999px #FFF , 665px 924px #FFF , 176px 233px #FFF , 833px 826px #FFF , 212px 1299px #FFF , 1463px 1352px #FFF , 1099px 1440px #FFF , 857px 1483px #FFF , 301px 1546px #FFF , 1433px 793px #FFF , 1177px 864px #FFF , 277px 898px #FFF , 1012px 374px #FFF , 962px 1934px #FFF , 514px 570px #FFF , 1550px 1849px #FFF , 880px 1244px #FFF , 564px 311px #FFF , 1507px 1412px #FFF , 151px 1697px #FFF , 1771px 1584px #FFF , 1791px 573px #FFF , 109px 1906px #FFF , 1183px 1937px #FFF , 1064px 1321px #FFF , 1985px 45px #FFF , 1713px 515px #FFF , 462px 1372px #FFF , 1744px 446px #FFF , 99px 563px #FFF , 1734px 1659px #FFF , 1270px 1003px #FFF , 483px 923px #FFF , 65px 805px #FFF , 1058px 961px #FFF , 678px 1245px #FFF , 1284px 343px #FFF , 1375px 878px #FFF , 1331px 168px #FFF , 968px 1676px #FFF , 1068px 1568px #FFF , 236px 168px #FFF , 1549px 1176px #FFF , 36px 852px #FFF , 938px 1421px #FFF , 1514px 1325px #FFF , 803px 473px #FFF , 401px 1979px #FFF , 882px 1301px #FFF , 2000px 454px #FFF , 1989px 1259px #FFF , 463px 938px #FFF , 54px 780px #FFF , 243px 1268px #FFF , 1043px 1648px #FFF , 379px 358px #FFF , 763px 591px #FFF , 1105px 1462px #FFF , 875px 1602px #FFF , 157px 298px #FFF , 1519px 1162px #FFF , 878px 1134px #FFF , 210px 649px #FFF , 29px 1197px #FFF , 292px 939px #FFF , 934px 863px #FFF , 1200px 1530px #FFF , 1417px 1732px #FFF , 1554px 645px #FFF , 1504px 829px #FFF , 1374px 1881px #FFF , 806px 1216px #FFF , 939px 1554px #FFF , 1971px 1976px #FFF , 1184px 938px #FFF , 922px 1318px #FFF , 1708px 1883px #FFF , 318px 746px #FFF , 291px 559px #FFF , 1028px 1591px #FFF , 1410px 90px #FFF , 1492px 916px #FFF , 376px 527px #FFF , 1252px 1419px #FFF , 829px 1303px #FFF , 352px 1376px #FFF , 1487px 1703px #FFF , 302px 515px #FFF , 237px 1438px #FFF , 1704px 1087px #FFF , 1340px 328px #FFF , 1837px 1694px #FFF , 421px 1970px #FFF , 1401px 736px #FFF , 750px 1393px #FFF , 313px 852px #FFF , 1908px 1195px #FFF , 1955px 1563px #FFF , 1891px 1070px #FFF , 1323px 442px #FFF , 1731px 993px #FFF , 1797px 210px #FFF , 1046px 865px #FFF , 1059px 1349px #FFF , 969px 84px #FFF , 914px 1435px #FFF , 197px 1752px #FFF , 241px 664px #FFF , 1236px 106px #FFF , 1015px 1942px #FFF , 1784px 1173px #FFF , 1610px 1572px #FFF , 1111px 533px #FFF , 1078px 869px #FFF , 1563px 1891px #FFF , 875px 601px #FFF , 1706px 777px #FFF , 1106px 884px #FFF , 1672px 294px #FFF , 181px 1770px #FFF , 1105px 1827px #FFF , 690px 506px #FFF , 1611px 1258px #FFF , 192px 1679px #FFF , 306px 227px #FFF , 1865px 247px #FFF , 1722px 224px #FFF , 1268px 772px #FFF , 1372px 974px #FFF , 262px 1156px #FFF , 179px 1432px #FFF , 713px 1899px #FFF , 1933px 1651px #FFF , 947px 932px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 171px 907px #FFF , 1655px 1777px #FFF , 505px 1912px #FFF , 1833px 931px #FFF , 580px 1750px #FFF , 1296px 1596px #FFF , 104px 1826px #FFF , 1559px 1500px #FFF , 469px 552px #FFF , 788px 795px #FFF , 625px 1030px #FFF , 489px 1092px #FFF , 233px 686px #FFF , 920px 1024px #FFF , 461px 1264px #FFF , 1821px 371px #FFF , 1239px 930px #FFF , 560px 1766px #FFF , 746px 1316px #FFF , 1118px 1978px #FFF , 364px 1094px #FFF , 442px 1607px #FFF , 1247px 1620px #FFF , 1812px 1531px #FFF , 187px 1621px #FFF , 1077px 746px #FFF , 937px 1468px #FFF , 1432px 1895px #FFF , 1775px 370px #FFF , 632px 222px #FFF , 458px 1732px #FFF , 488px 17px #FFF , 1467px 42px #FFF , 1533px 115px #FFF , 248px 436px #FFF , 1836px 1898px #FFF , 328px 726px #FFF , 182px 1875px #FFF , 1074px 1950px #FFF , 1210px 257px #FFF , 1313px 132px #FFF , 1298px 30px #FFF , 213px 1247px #FFF , 526px 1364px #FFF , 1573px 1759px #FFF , 1151px 584px #FFF , 1684px 816px #FFF , 728px 1614px #FFF , 54px 1225px #FFF , 370px 1370px #FFF , 761px 1525px #FFF , 657px 1707px #FFF , 1844px 1843px #FFF , 804px 852px #FFF , 185px 140px #FFF , 1816px 1419px #FFF , 1099px 840px #FFF , 1973px 1584px #FFF , 728px 752px #FFF , 737px 1365px #FFF , 1975px 252px #FFF , 529px 726px #FFF , 1573px 749px #FFF , 255px 1666px #FFF , 1459px 1511px #FFF , 1255px 164px #FFF , 1093px 558px #FFF , 1019px 51px #FFF , 1851px 146px #FFF , 736px 145px #FFF , 208px 1735px #FFF , 658px 1443px #FFF , 845px 1228px #FFF , 94px 116px #FFF , 847px 1610px #FFF , 798px 37px #FFF , 1707px 1389px #FFF , 32px 842px #FFF , 208px 999px #FFF , 1726px 1968px #FFF , 393px 1846px #FFF , 811px 1076px #FFF , 1771px 1618px #FFF , 1068px 1410px #FFF , 860px 719px #FFF , 1112px 248px #FFF , 516px 1599px #FFF , 208px 1274px #FFF , 1452px 295px #FFF , 1812px 487px #FFF , 907px 561px #FFF , 736px 126px #FFF , 1829px 1411px #FFF , 450px 811px #FFF , 949px 1805px #FFF , 1333px 1272px #FFF , 299px 1811px #FFF , 501px 553px #FFF , 1525px 1867px #FFF , 1079px 1091px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 171px 907px #FFF , 1655px 1777px #FFF , 505px 1912px #FFF , 1833px 931px #FFF , 580px 1750px #FFF , 1296px 1596px #FFF , 104px 1826px #FFF , 1559px 1500px #FFF , 469px 552px #FFF , 788px 795px #FFF , 625px 1030px #FFF , 489px 1092px #FFF , 233px 686px #FFF , 920px 1024px #FFF , 461px 1264px #FFF , 1821px 371px #FFF , 1239px 930px #FFF , 560px 1766px #FFF , 746px 1316px #FFF , 1118px 1978px #FFF , 364px 1094px #FFF , 442px 1607px #FFF , 1247px 1620px #FFF , 1812px 1531px #FFF , 187px 1621px #FFF , 1077px 746px #FFF , 937px 1468px #FFF , 1432px 1895px #FFF , 1775px 370px #FFF , 632px 222px #FFF , 458px 1732px #FFF , 488px 17px #FFF , 1467px 42px #FFF , 1533px 115px #FFF , 248px 436px #FFF , 1836px 1898px #FFF , 328px 726px #FFF , 182px 1875px #FFF , 1074px 1950px #FFF , 1210px 257px #FFF , 1313px 132px #FFF , 1298px 30px #FFF , 213px 1247px #FFF , 526px 1364px #FFF , 1573px 1759px #FFF , 1151px 584px #FFF , 1684px 816px #FFF , 728px 1614px #FFF , 54px 1225px #FFF , 370px 1370px #FFF , 761px 1525px #FFF , 657px 1707px #FFF , 1844px 1843px #FFF , 804px 852px #FFF , 185px 140px #FFF , 1816px 1419px #FFF , 1099px 840px #FFF , 1973px 1584px #FFF , 728px 752px #FFF , 737px 1365px #FFF , 1975px 252px #FFF , 529px 726px #FFF , 1573px 749px #FFF , 255px 1666px #FFF , 1459px 1511px #FFF , 1255px 164px #FFF , 1093px 558px #FFF , 1019px 51px #FFF , 1851px 146px #FFF , 736px 145px #FFF , 208px 1735px #FFF , 658px 1443px #FFF , 845px 1228px #FFF , 94px 116px #FFF , 847px 1610px #FFF , 798px 37px #FFF , 1707px 1389px #FFF , 32px 842px #FFF , 208px 999px #FFF , 1726px 1968px #FFF , 393px 1846px #FFF , 811px 1076px #FFF , 1771px 1618px #FFF , 1068px 1410px #FFF , 860px 719px #FFF , 1112px 248px #FFF , 516px 1599px #FFF , 208px 1274px #FFF , 1452px 295px #FFF , 1812px 487px #FFF , 907px 561px #FFF , 736px 126px #FFF , 1829px 1411px #FFF , 450px 811px #FFF , 949px 1805px #FFF , 1333px 1272px #FFF , 299px 1811px #FFF , 501px 553px #FFF , 1525px 1867px #FFF , 1079px 1091px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 300;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}
        </style>
    </head>
    <body>
    <div id="login-form">
    <h2>Login</h2>
            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>
            <div id="title">
    <form method="post" action="">
  
  <input type="text" name="username" placeholder="Username">
  <input type="password" name="password" placeholder="Password"><br><br>
  
  <input type="submit" name="submit" value="Login">
  <a href="ref.php">
  <button>Sign Up</button>
</a>
</form>


</div>
<?php
   echo "Login successful";
} else {
  echo "Invalid username or password";
  
}
}

// Close database connection
mysqli_close($conn);

?>
</div>


    </body>

</html>
