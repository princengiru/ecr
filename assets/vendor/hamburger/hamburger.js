const list = document.getElementById('list');
const hamburger = document.getElementById('hamburger');
const mega = document.getElementById('mega');

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle('active');
  list.classList.toggle('active');
});

const teamMembers = [
  {
    name: 'Emmanue',
    position: 'Managing Director',
    mainImage: 'assets/img/md.jpg',
    smallImage: 'assets/img/md.jpg',
    social: {
      twitter: 'https://api.whatsapp.com/send?phone=+250782761021&text=Hello%20Managing%20Director"',
      facebook: 'https://www.facebook.com/emmanuel.nshimiyimana.1612?mibextid=ZbWKwL',
      instagram: ''
    }
  },
  {
    name: 'Claude',
    position: 'Customer Support',
    mainImage: 'assets/img/cs.jpg',
    smallImage: 'assets/img/cs.jpg',
    social: {
      twitter: 'https://api.whatsapp.com/send?phone=+250780903933&text=Hello%20Customer%20Support',
      facebook: '',
      instagram: ''
    }
  },
  {
    name: 'Erneste',
    position: 'Project Designer',
    mainImage: 'assets/img/designer.jpg',
    smallImage: 'assets/img/designer.jpg',
    social: {
      twitter: 'https://api.whatsapp.com/send?phone=+250789902112&text=Hello%20Project%20designer',
      facebook: '',
      instagram: ''
    }
  },
  {
    name: 'Prince',
    position: 'Web Developer',
    mainImage: 'assets/img/wd3.jpg',
    smallImage: 'assets/img/wd3.jpg',
    social: {
      twitter: 'https://api.whatsapp.com/send?phone=+250786263874&text=Hello%20senior%20developer"',
      facebook: 'https://web.facebook.com/princehymn',
      instagram: 'https://www.instagram.com/prince_hymn'
    }
  }
];

let currentMemberIndex = 0;

function updateTeamMember(index) {
  const mainImage = document.getElementById('mainImage');
  const mainPosition = document.getElementById('mainPosition');
  const description = document.getElementById('description');
  const descriptionName = document.getElementById('description-name');
  const descriptionBody = document.getElementById('description-body');
  const socialLinks = document.getElementById('socialLinks');

  const member = teamMembers[index];

  // Update the left side (main image)
  mainImage.src = member.mainImage;
  mainPosition.textContent = member.position;
  descriptionName.textContent = `${member.name}`;
  descriptionBody.textContent = ` ${member.position}.`;

  // Update the social media links
  socialLinks.innerHTML = `
    <a href="${member.social.twitter}" class="twitter" target="_blank"><i class="fa fa-whatsapp"></i></a>
    <a href="${member.social.facebook}" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="${member.social.instagram}" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
  `;

  // Update the right side (small images)
  const smallImages = teamMembers.slice(index + 1).concat(teamMembers.slice(0, index));
  document.getElementById('img1').src = smallImages[0].smallImage;
  document.getElementById('img2').src = smallImages[1].smallImage;
  document.getElementById('img3').src = smallImages[2].smallImage;
}

document.getElementById('prevBtn').addEventListener('click', () => {
  currentMemberIndex = (currentMemberIndex - 1 + teamMembers.length) % teamMembers.length;
  updateTeamMember(currentMemberIndex);
});

document.getElementById('nextBtn').addEventListener('click', () => {
  currentMemberIndex = (currentMemberIndex + 1) % teamMembers.length;
  updateTeamMember(currentMemberIndex);
});

// Initialize the first member
updateTeamMember(currentMemberIndex);
