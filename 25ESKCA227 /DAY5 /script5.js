const students = [
    {
        name: "Rahul Sharma",
        branch: "CSE",
        cgpa: 8.8,
        city: "Jaipur",
        year: "2nd Year"
    },
    {
        name: "Priya Singh",
        branch: "IT",
        cgpa: 7.9,
        city: "Delhi",
        year: "2nd Year"
    },
    {
        name: "Aman Verma",
        branch: "AI",
        cgpa: 9.2,
        city: "Kota",
        year: "2nd Year"
    },
    {
        name: "Neha Gupta",
        branch: "ECE",
        cgpa: 8.0,
        city: "Ajmer",
        year: "2nd Year"
    },
    {
        name: "Rohit Meena",
        branch: "ME",
        cgpa: 7.4,
        city: "Udaipur",
        year: "2nd Year"
    }
];

// Total Students
document.getElementById("totalStudents").innerHTML =
    `Total Students : ${students.length}`;

function displayStudents(studentList) {

    let html = "";

    for (let i = 0; i < studentList.length; i++) {

        let color = (i % 2 === 0) ? "card-even" : "card-odd";

        let badge =
            studentList[i].cgpa > 8
            ? "badge bg-success"
            : "badge bg-danger";

        html += `
        <div class="col-md-4 mb-4">
            <div class="card ${color} p-3">

                <span class="badge bg-primary mb-2">
                    #${i + 1}
                </span>

                <h4>${studentList[i].name}</h4>

                <p>
                    ${studentList[i].branch}
                </p>

                <span class="${badge}">
                    CGPA : ${studentList[i].cgpa}
                </span>

                <button class="btn btn-primary btn-details mt-3">
                    Show Details
                </button>

                <div class="details">
                    <p><b>City:</b> ${studentList[i].city}</p>
                    <p><b>Year:</b> ${studentList[i].year}</p>
                </div>

            </div>
        </div>`;
    }

    document.getElementById("container").innerHTML = html;

    $(".btn-details").click(function () {

        $(this).next(".details").slideToggle();

        if ($(this).text() == "Show Details") {
            $(this).text("Hide Details");
            $(this).removeClass("btn-primary");
            $(this).addClass("btn-danger");
        } else {
            $(this).text("Show Details");
            $(this).removeClass("btn-danger");
            $(this).addClass("btn-primary");
        }

    });

    $(".card").hide().fadeIn(800);
}

displayStudents(students);

// Search Function
$("#search").on("keyup", function () {

    let value = $(this).val().toLowerCase();

    let filtered = students.filter(student =>
        student.name.toLowerCase().includes(value)
    );

    displayStudents(filtered);

});
