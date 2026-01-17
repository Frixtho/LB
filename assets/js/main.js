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
