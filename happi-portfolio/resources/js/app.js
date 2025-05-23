import './bootstrap';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

// Project Modal Data
const projects = {
    association: {
        title: 'Plateforme de Gestion des Associations',
        description: 'Développée avec Laravel, cette plateforme permet la gestion complète des associations : membres, événements, finances. Elle inclut une authentification sécurisée, des tableaux de bord personnalisés et des rapports automatisés.'
    },
    mobile: {
        title: 'Application Mobile de Suivi',
        description: 'Construite avec Flutter, cette application permet aux utilisateurs de suivre leurs tâches avec des notifications push via Firebase. Elle est optimisée pour iOS et Android avec une interface fluide.'
    },
    multimedia: {
        title: 'Montages Vidéo & Infographies',
        description: 'Création de vidéos promotionnelles et infographies dynamiques pour des campagnes numériques, utilisant Adobe Premiere Pro, After Effects et Canva. Projets incluant animations et designs percutants.'
    }
};

// Modal Functions
function openModal(id) {
    const project = projects[id];
    if (project) {
        document.getElementById('modal-title').textContent = project.title;
        document.getElementById('modal-description').textContent = project.description;
        const modal = document.getElementById('project-modal');
        modal.classList.remove('hidden');
        gsap.from('#project-modal > div', { y: 100, opacity: 0, duration: 0.5, ease: 'power2.out' });
    }
}

function closeModal() {
    const modal = document.getElementById('project-modal');
    gsap.to('#project-modal > div', {
        y: 100,
        opacity: 0,
        duration: 0.5,
        ease: 'power2.out',
        onComplete: () => modal.classList.add('hidden')
    });
}

// Event Listeners for Project Cards
document.querySelectorAll('.project-card button[data-project]').forEach(button => {
    button.addEventListener('click', () => openModal(button.dataset.project));
});

// Close Modal Button
document.getElementById('close-modal')?.addEventListener('click', closeModal);

// Project Card Hover Effects
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card, { scale: 1.05, duration: 0.3, boxShadow: '0 10px 20px rgba(0,0,0,0.2)' });
    });
    card.addEventListener('mouseleave', () => {
        gsap.to(card, { scale: 1, duration: 0.3, boxShadow: '0 4px 6px rgba(0,0,0,0.1)' });
    });
});

// GSAP Scroll Animations
gsap.utils.toArray('[data-gsap="fade-up"]').forEach((el, i) => {
    gsap.from(el, {
        y: 50,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: el,
            start: 'top 80%',
        }
    });
});

gsap.utils.toArray('[data-gsap="fade-right"]').forEach(el => {
    gsap.from(el, {
        x: -100,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: el,
            start: 'top 80%',
        }
    });
});

gsap.utils.toArray('[data-gsap="fade-left"]').forEach(el => {
    gsap.from(el, {
        x: 100,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: el,
            start: 'top 80%',
        }
    });
});
