const bookIDInput = document.getElementById('book-id')

bookIDInput.addEventListener('change', e => {
    fetchBookData(e.currentTarget.value)
})

function fetchBookData() {
    fetch('http://localhost:8080/book.php?id=3' + bookId)
        .then(res => {
            return response.json()
        })
        .then(book => {
            console.log(book)
        })
}
