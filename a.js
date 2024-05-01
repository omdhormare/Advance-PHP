// Function to calculate penalty for overdue book
function calculatePenalty(returnDate, currentDate, penaltyRate) {
    // Convert returnDate and currentDate to JavaScript Date objects
    const returnDateTime = new Date(returnDate);
    const currentDateTime = new Date(currentDate);

    // Calculate the difference in days between the return date and current date
    const timeDiff = currentDateTime.getTime() - returnDateTime.getTime();
    const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24)); // Convert milliseconds to days

    // If the book is not overdue, return 0 penalty
    if (daysDiff <= 0) {
        return 0;
    }

    // Calculate penalty based on penalty rate
    const penalty = daysDiff * penaltyRate;
    return penalty;
}

// Example usage
const returnDate = '2024-02-24'; // Assuming the book was due to be returned on February 24, 2024
const currentDate = '2024-03-01'; // Assuming today's date is March 1, 2024
const penaltyRate = 2; // Penalty rate per day

const penalty = calculatePenalty(returnDate, currentDate, penaltyRate);
console.log("Penalty for overdue book:", penalty, "dollars");
