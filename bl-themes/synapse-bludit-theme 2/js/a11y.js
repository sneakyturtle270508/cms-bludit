function toggleA11y() {
    document.getElementById('a11y-panel').classList.toggle('open');
}

function setFont(type) {
    document.body.classList.remove('dyslexic', 'comic');
    document.querySelectorAll('.a11y-option').forEach(b => b.classList.remove('active'));
    if (type === 'dyslexic') {
        document.body.classList.add('dyslexic');
        document.getElementById('opt-dyslexic').classList.add('active');
    } else if (type === 'comic') {
        document.body.classList.add('comic');
        document.getElementById('opt-comic').classList.add('active');
    } else {
        document.getElementById('opt-normal').classList.add('active');
    }
    localStorage.setItem('synapse-font', type);
}
const saved = localStorage.getItem('synapse-font');
if (saved) setFont(saved);
else document.getElementById('opt-normal').classList.add('active');
document.addEventListener('click', function(e) {
    const panel = document.getElementById('a11y-panel');
    const btn = document.getElementById('a11y-btn');
    if (!panel.contains(e.target) && !btn.contains(e.target)) {
        panel.classList.remove('open');
    }
});