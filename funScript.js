const words = ["PHOTOGRAPHY", "CAMERA", "STUDIO", "PHOTOGRAPHER", "PACKAGE"];//initialze array withwords to be gussed
let selectedWord = '';//initialze a var for  word to be selected randomly 
let guessedWord = [];//initialize an array to push gussed words in
let incorrectLetters = [];//initiaize an array to push incorrect letters gussed by gamer 


//choosing word randomly from the array initialize above 
function chooseWord() {
    return words[Math.floor(Math.random() * words.length)];
}
//replace all the letters of the words by dashes be hidden from user 
function hideWord(word) {
    return Array(word.length).fill('_');
}

//update word to be diplay to the user all correct letters enetred 
function updateDisplay() {
    document.getElementById('word-show').textContent = guessedWord.join(' ');//use join method od array js to join letters  
    document.getElementById('incorrect-letters').textContent = `Incorrect Letters: ${incorrectLetters.join(', ')}`;
}

//function recognize with gamer gussing 
function handleGuess() {
    const guessInput = document.getElementById('guessedInput');
    const guess = guessInput.value.toUpperCase();
//check wheather the gussed elemnt is a letter or not and the size must be equalt to one 
//at each time the gamer must gusse only one letter
    if (!guess || !guess.match(/[A-Z]/) || guess.length !== 1) {
        alert('Please enter a valid single letter.');
        return;
    }

    //checked if the gusssed word or inncorect letters has alredy these letters that mean the user has already entred these letters 
    if (guessedWord.includes(guess) || incorrectLetters.includes(guess)) {
        alert('You already guessed this letter. Try again.');
        return;
    }
//check if the randomly selected word include a letter of the guseed lettres
//traverse throught the selected word and find the index place then place this letter in the correct pos in the hussed word 
    if (selectedWord.includes(guess)) {
        for (let i = 0; i < selectedWord.length; i++) {
            if (selectedWord[i] === guess) {
                guessedWord[i] = guess;
            }
        }
    } else {
        incorrectLetters.push(guess);//if the above is flase then push the letter into the incorrect letters array 
    }

    updateDisplay();//inovking function update display to inform user by any updation 


//if the dashed are all replaced with there correct letter that mean the gamer win 
    if (!guessedWord.includes('_')) {
        
        alert('Congratulations! You guessed the word.');
        resetGame();//call resrt game to play again 
    }

    guessInput.value = '';//put it to empty again and again after each guess
}

function resetGame() {
    selectedWord = chooseWord();
    guessedWord = hideWord(selectedWord);
    incorrectLetters = [];
    updateDisplay();
}

// Initialize the game
resetGame();