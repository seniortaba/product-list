const sizeForm = document.getElementById('size')
const dimensionsForm = document.getElementById('dimension')
const weightFrom = document.getElementById('weight')

window.addEventListener('DOMContentLoaded', (event) => {

    addEventListener('change', showModal)

    function showModal() {
        const select = document.getElementById('select').value;
        switch (select) {
            case 'size':
                sizeForm.style.display = "block";
                dimensionsForm.style.display = "none";
                weightFrom.style.display = "none";
                break;
            case 'dimensions':
                dimensionsForm.style.display = "block";
                sizeForm.style.display = "none";
                weightFrom.style.display = "none";
                break;
            case 'weight':
                weightFrom.style.display = "block";
                sizeForm.style.display = "none";
                dimensionsForm.style.display = "none";
                break;
        }
    }
});

