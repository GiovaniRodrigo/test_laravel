<html style="background-color:rgb(207, 204, 201);">
<body style="width: 70%;position:relative;left:20%;background-color:rgb(208, 208, 255);padding:20px;">
    <section style="position:relative;align-items: center;">
        <h1 style="position: relative"><span style="font-family: fantasy"> Teste</span> <span style="font-family: 'Courier New', Courier, monospace"> Infortech</span></h1>

        <div style="position: relative">
            <label for=""><span style="font-family: sans-serif">Quantia do combustível a ser inserido no automóvel</span></label>
        </div>
        <div style="position: relative">
            <input type="float">
        </div>
    </section>
    <section style="display: flex;gap:5px;padding-top:3px;">
        <button id="myBtn">Enviar</button>
        <a href="http://127.0.0.1:8000/forgot-password" style="font-family: sans-serif; text-decoration:none;color:black;border-top: 10px;font-size:15px;">
            Recuperar senha
        </a>
    </section>
</body>
</html>


<script type="text/javascript">
    document.getElementById("myBtn").onclick = function () 
    {
        location.href = "http://127.0.0.1:8000/principal";
    };
</script>