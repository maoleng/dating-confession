logout = document.querySelector('.members-signout')
if (logout) {
    logout.addEventListener('click', async function (e) {
        e.preventDefault()
        await fetch('/auth/logout')
        Livewire.navigate('/')
    })

}
