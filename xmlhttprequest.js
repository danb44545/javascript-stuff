 <script>
        var request = new XMLHttpRequest();    
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById("result").innerHTML = request.responseText;
            }
        }
        request.open("GET", "/xss.php?c=2", true);
        request.send();
    </script>
