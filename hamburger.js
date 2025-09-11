const list = document.getElementById('list');
const hamburger = document.getElementById('hamburger');
const mega = document.getElementById('mega');

	hamburger.addEventListener("click" , () =>{
		hamburger.classList.toggle('active');
		list.classList.toggle('active');
	})
	
const teamMembers = [
    {
      name: 'John Smith',
      position: 'CEO',
      mainImage: 'assets/img/2.jpg',
      smallImage: 'assets/img/2.jpg'
    },
    {
      name: 'Jane Doe',
      position: 'Team Leader',
      mainImage: 'assets/img/finance.jpg',
      smallImage: 'assets/img/finance.jpg'
    },
    {
      name: 'Mark Johnson',
      position: 'Developer',
      mainImage: 'assets/img/4.png',
      smallImage: 'assets/img/4.png'
    },
    {
      name: 'Emily Brown',
      position: 'Debugger',
      mainImage: 'assets/img/5.jpg',
      smallImage: 'assets/img/5.jpg'
    },
    {
      name: 'Michael Green',
      position: 'Tester',
      mainImage: 'assets/img/diane.jpg',
      smallImage: 'assets/img/diane.jpg'
    }
  ];

  let currentMemberIndex = 0;

  function updateTeamMember(index) {
    const mainImage = document.getElementById('mainImage');
    const mainPosition = document.getElementById('mainPosition');
    const description = document.getElementById('description');
    const descriptionName = document.getElementById('description-name');
    const descriptionBody = document.getElementById('description-body');

    const member = teamMembers[index];

    // Update the left side (main image)
    mainImage.src = member.mainImage;
    mainPosition.textContent = member.position;
    descriptionName.textContent = `${member.name}`;
    descriptionBody.textContent = `${member.name} is the ${member.position}.`;

    // Update the right side (small images)
    const smallImages = teamMembers.slice(index + 1).concat(teamMembers.slice(0, index));

    document.getElementById('img1').src = smallImages[0].smallImage;
    document.getElementById('img2').src = smallImages[1].smallImage;
    document.getElementById('img3').src = smallImages[2].smallImage;
    document.getElementById('img4').src = smallImages[3].smallImage;
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