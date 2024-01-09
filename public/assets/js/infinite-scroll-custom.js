if (typeof loadedPage === 'undefined') {
    loadedPage = 1
} else if (window.location.pathname === '/' || window.location.pathname === '/collection') {
    loadedPage = Number(document.querySelector('#loop').lastElementChild.lastElementChild.getAttribute('data-cur_page'))
    loadedPage += 1
    document.querySelector('.older-posts').setAttribute('href', `/?page=${loadedPage}`)
}
var infScroll = new InfiniteScroll('.section-loop', {
    path: 'a.older-posts',
    append: '.items-wrap',
    history: false,
    hideNav: '.pagination',
});
infScroll.on('load', onPageLoad);
function onPageLoad() {
    if (loadedPage >= pageCount || (window.location.pathname !== '/' && window.location.pathname !== '/collection')) {
        infScroll.options.loadOnScroll = false;
        infScroll.off(onPageLoad);
    } else {
        loadedPage += 1
        document.querySelector('.older-posts').setAttribute('href', `/?page=${loadedPage}`)
    }
}
