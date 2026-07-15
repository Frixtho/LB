function nextRoomSlide(button) {
  const slider = button.parentElement.querySelector(".room-slider");
  let index = parseInt(slider.dataset.index);
  const total = slider.children.length;

  index = (index + 1) % total;
  slider.dataset.index = index;
  slider.style.transform = `translateX(-${index * 100}%)`;
}

function prevRoomSlide(button) {
  const slider = button.parentElement.querySelector(".room-slider");
  let index = parseInt(slider.dataset.index);
  const total = slider.children.length;

  index = (index - 1 + total) % total;
  slider.dataset.index = index;
  slider.style.transform = `translateX(-${index * 100}%)`;
}
function filterRooms(type) {
  const rooms = document.querySelectorAll(".room-section");

  rooms.forEach(room => {
    if (room.dataset.room === type) {
      room.style.display = "grid";
    } else {
      room.style.display = "none";
    }
  });

  // tombol aktif
  document.getElementById("btn-darat").classList.remove("bg-[#C2A878]", "text-white");
  document.getElementById("btn-laut").classList.remove("bg-[#C2A878]", "text-white");

  document.getElementById(`btn-${type}`).classList.add("bg-[#C2A878]", "text-white");
}

// default tampil kamar darat
document.addEventListener("DOMContentLoaded", () => {
  filterRooms("darat");
});

  const isDarat = document.body.classList.contains('page-darat');
  const isLaut  = document.body.classList.contains('page-laut');

  document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname
      .split("/")
      .pop()
      .replace(".html", "");

    document.querySelectorAll(".room-tab").forEach(tab => {
      // reset semua
      tab.classList.remove("bg-[#C2A878]","text-white","shadow-md","scale-105");
      tab.classList.add("text-[#C2A878]");

      if (tab.dataset.page === currentPage) {
        tab.classList.add("bg-[#C2A878]","text-white","shadow-md","scale-105");
        tab.classList.remove("text-[#C2A878]");
      }
    });
  });
