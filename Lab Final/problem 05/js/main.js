let answers = ['b', 'a', 'b', 'b'];

let score = 0;

$("#submit").click(() => {
    for (let i = 1; i <= answers.length; i++){
        let given = $('input[name=question'+i+']:checked').val();
        console.log(given);
        if (given == answers[i-1]){
            score ++;
        }
    }
    alert("You scored: " + score);
    score = 0;
});