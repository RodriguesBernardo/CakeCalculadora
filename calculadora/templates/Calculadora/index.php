<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        input, select, button { margin: 5px; padding: 10px; font-size: 18px; }
        #resultado { font-size: 20px; font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Calculadora Simples</h1>
    
    <?= $this->Form->create(null) ?>
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operacao">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>

        <br>
        <button type="submit">Calcular</button>
    <?= $this->Form->end() ?>

    <?php if ($resultado !== null): ?>
        <p id="resultado">Resultado: <?= h($resultado) ?></p>
    <?php endif; ?>

</body>
</html>
