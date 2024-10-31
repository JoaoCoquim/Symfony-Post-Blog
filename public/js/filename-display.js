document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('post_attachment');
    const fileNameDisplay = document.getElementById('file-name');

    fileInput.addEventListener('change', function () {
        fileNameDisplay.style.marginBottom = '20px';
        fileNameDisplay.style.color = 'royalblue';
        fileNameDisplay.textContent = fileInput.files[0] ? fileInput.files[0].name : 'No file was selected.';
    });
});