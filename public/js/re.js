      //โค้ดรีเฟชตัวเอง 
      function w3_open_nav(x) {
          if (document.getElementById("nav_" + x).style.display == "block") {
            w3_close_nav(x);
          } else {
            w3_close_nav("tutorials");
            w3_close_nav("references");
            w3_close_nav("examples");
            w3_close_nav("translate");
            w3_close_nav("search");
            document.getElementById("nav_" + x).style.display = "block";
            if (document.getElementById("navbtn_" + x)) {
                document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
                document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
            } 
            if (x == "search") {
              if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
            }
          }
       }
