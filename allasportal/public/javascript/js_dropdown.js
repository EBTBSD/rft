function adminDrop() {
    document.getElementById("adminDropdown").classList.toggle("show");
  }

  function userDrop() {
    document.getElementById("userDropdown").classList.toggle("show");
  }

    function hrDrop(){
        document.getElementById("hrDropdown").classList.toggle("show");
    }

  function vizsgaDrop(){
    document.getElementById("vizsgaDropdown").classList.toggle("show");
  }
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

// Modal megnyitása
document.querySelectorAll('.jobs_btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-company');
        var pos = button.getAttribute('data-position');
        var sal = button.getAttribute('data-salary');
        var desc = button.getAttribute('data-description');
        var created = button.getAttribute('data-created');

        // data-id="{{ $jobs->id }}"
        // data-company="{{ $jobs->company }}"
        // data-position="{{ $jobs->position }}"
        // data-salary="{{ $jobs->salary }}"
        // data-description="{{ $jobs->description }}"
        // data-created="{{ $jobs->created_at }}"


        var modal = document.getElementById('applyModal');


        var job_id = modal.querySelector('#job_id');
        var job_name = modal.querySelector('#job_name');
        var job_pos = modal.querySelector('#job_pos');
        var job_text = modal.querySelector('#job_t');
        var job_sal = modal.querySelector('#job_sal');
        var job_desc = modal.querySelector('#job_desc');
        var job_created = modal.querySelector('#job_created');

        // Átadjuk a munkát a modalnak
        //job_text.textContent = "ANYÁÁÁÁD";
        job_id.value = id;
        job_name.textContent = name;
        job_pos.textContent = pos;


        // Modal megjelenítése
        modal.style.display = 'flex';
    });
});

// Modal bezárása a "close" gombra kattintva
document.querySelector('.close-btn').addEventListener('click', function() {
    document.getElementById('applyModal').style.display = 'none';
});

// Modal bezárása, ha a háttérre kattintunk
window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('applyModal')) {
        document.getElementById('applyModal').style.display = 'none';
    }
});

