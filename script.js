document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // only fade in once
        }
      });
    },
    {
      threshold: 0.1
    }
  );

  const members = document.querySelectorAll(".member");
  members.forEach(member => {
    observer.observe(member);
  });

  const portfolioItems = document.querySelectorAll(".portfolio-item");
  portfolioItems.forEach(item => {
    observer.observe(item);
  });
});
