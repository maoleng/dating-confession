async function downloadImage(imageSrc, nameOfDownload = 'my-image.png')
{
    const response = await fetch(imageSrc);

    const blobImage = await response.blob();

    const href = URL.createObjectURL(blobImage);

    const anchorElement = document.createElement('a');
    anchorElement.href = href;
    anchorElement.download = nameOfDownload;

    document.body.appendChild(anchorElement);
    anchorElement.click();

    document.body.removeChild(anchorElement);
    window.URL.revokeObjectURL(href);
}

async function httpRequest( { url, method = 'GET', body = {} } )
{
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const init = {
        headers: method === 'GET' ? {} : { 'X-CSRF-TOKEN': csrfToken },
        method: method,
        body: method === 'GET' ? undefined : body,
    }

    return await fetch(url, init)
}
