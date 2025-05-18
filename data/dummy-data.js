const dummyData = {
    schools: [
        {
            id: 1,
            name: "SMP Informatika 1",
            totalQuota: 100,
            remainingQuota: 20,
            details: "Located in the heart of the city, offering a comprehensive curriculum."
        },
        {
            id: 2,
            name: "SMP Informatika 2",
            totalQuota: 80,
            remainingQuota: 10,
            details: "Known for its excellent faculty and extracurricular activities."
        },
        {
            id: 3,
            name: "MTs Informatika",
            totalQuota: 60,
            remainingQuota: 5,
            details: "Focuses on both academic and religious education."
        }
    ],
    rankings: [
        {
            studentId: "S001",
            name: "Ali Ahmad",
            targetSchool: "SMP Informatika 1",
            score: 85
        },
        {
            studentId: "S002",
            name: "Budi Santoso",
            targetSchool: "SMP Informatika 2",
            score: 90
        },
        {
            studentId: "S003",
            name: "Citra Dewi",
            targetSchool: "MTs Informatika",
            score: 88
        }
    ],
    registrationStatus: [
        {
            studentId: "S001",
            documentSubmitted: true,
            selectionResult: "Accepted"
        },
        {
            studentId: "S002",
            documentSubmitted: true,
            selectionResult: "Accepted"
        },
        {
            studentId: "S003",
            documentSubmitted: false,
            selectionResult: "Pending"
        }
    ]
};

export default dummyData;