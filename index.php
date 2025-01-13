<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the cloud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <center><h3>https://amilo.cloud</h1></center>
        <br>
        <center><h5>Welcome to my site, where I try to share my intrest with others.</h3></center>
        <center><nav>
            <li>| I'm too shy to share anything lmao</a> |</li>
            <br>
            <li>| My other website which I share with a friend of mine: |</li>
            <li>| <a href="https://wrks.hu">wrks.hu</a> |</li>
        </nav></center>
    </div>
    
    <footer>
        <center>
            <p>Your IP: <a href="#" id="revealIP">reveal</a>  <span id="ipAddress" style="display: none;"></span></p>
        </center>
    </footer>
    <script>
        document.getElementById('revealIP').addEventListener('click', function(e) {
            e.preventDefault();
            fetch('https://api.ipify.org?format=json')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('ipAddress').textContent = data.ip;
                    document.getElementById('ipAddress').style.display = 'inline';
                    this.style.display = 'none';
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('ipAddress').textContent = 'Unable to retrieve IP';
                    document.getElementById('ipAddress').style.display = 'inline';
                    this.style.display = 'none';
                });
        });
    </script>
</body>
</html>