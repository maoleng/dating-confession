document.querySelector('.members-signout').addEventListener('click', async function (e) {
    e.preventDefault()
    await fetch('/auth/logout')
    Livewire.navigate('/')
})
