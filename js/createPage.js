export function loadPage() {
    document.cookie = `room=${this.id}; path=/; expires=Tue, 19 Jan 2038 03:14:07 GMT`;
    window.location.href = './page.php';
}