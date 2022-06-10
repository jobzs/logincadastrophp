<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container" style="width: 400px; margin-top: 40px">
        <h4>Cadastro de Usuário</h4>
        <form action="">

            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required autocomplete="off" placeholder="digite o cpf" onblur="validarCPF(this)">
                <small>Precisa ser igual a senha digitada acima.</small>
            </div>

            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script>
        // window.onload = function() {
        //     var inserirblur = document.getElementById('cpf');
        //     inserirblur.setAttribute('onblur', 'validarCPF(this)');
        // }

        function cpfvalidador(cpf) {
            cpf = cpf.replace(/\D/g, '');
            if (cpf.toString().length != 11 || /^(\d)\1{10}$/.test(cpf)) return false;
            var result = true;
            [9, 10].forEach(function(j) {
                var soma = 0,
                    r;
                cpf.split(/(?=)/).splice(0, j).forEach(function(e, i) {
                    soma += parseInt(e) * ((j + 2) - (i + 1));
                });
                r = soma % 11;
                r = (r < 2) ? 0 : 11 - r;
                if (r != cpf.substring(j, j + 1)) result = false;
            });
            return result;

        }

        function validarCPF(el) {
            if (!cpfvalidador(el.value)) {
                var certocpf = document.getElementById('cpf');
                // alert("CPF inválido!" + el.value);
                certocpf.setCustomValidity("CPF inválido!");
                // apaga o valor
                el.value = "";
            }
        }

        // console.log('11111111111', cpfvalidador('11111111111'));
        // console.log('82312321312', cpfvalidador('82312321312'));
        // console.log('825.566.405-02', cpfvalidador('825.566.405-02'));
        // console.log('875.189.681-85', cpfvalidador('875.189.681-85'));
        // console.log('875.189.681-86', cpfvalidador('875.189.681-86'));
        // console.log('640.422.216-70', cpfvalidador('640.422.216-70'));
    </script>


   

</body>

</html>