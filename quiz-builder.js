jQuery(document).ready(function ($) {
    $("#submit-quiz").click(function () {
        let score = 0;

        // Check answers for each question
        const answers = {
            q1: "paris",
            q2: "jupiter",
            q3: "carbon_dioxide",
            q4: "shakespeare",
            q5: "au",
            q6: "mars",
        };

        for (const question in answers) {
            const selectedAnswer = $('input[name="' + question + '"]:checked').val();
            if (selectedAnswer === answers[question]) {
                score++;
            }
        }

        // Display the score
        const totalQuestions = Object.keys(answers).length;
        const percentage = (score / totalQuestions) * 100;
        const resultText = `You scored ${score} out of ${totalQuestions}. (${percentage}%)`;
        $("#quiz-results").text(resultText);
    });
});
