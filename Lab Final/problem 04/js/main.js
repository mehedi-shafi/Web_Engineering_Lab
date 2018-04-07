$("#calculate").click(() => {
    let expression = $("#expression").val();
    expression = expression.replace('{', '(');
    expression = expression.replace('}', ')');
    
    expression = expression.replace('[', '(');
    expression = expression.replace(']', ')');
    $("#result").val(eval(expression));
});