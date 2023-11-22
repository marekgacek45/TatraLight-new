// Funkcja odliczająca
const counter = (x, y, span, time, prefix, suffix) => {
    const interval = setInterval(() => {
      span.innerHTML = prefix + x + suffix;
      x++;
      if (x > y) {
        clearInterval(interval);
      }
    }, time);
  };
  
  // Funkcja, która rozpocznie odliczanie, gdy użytkownik dojedzie do elementu
  const startCounterWhenVisible = (element, startValue, endValue, time, prefix, suffix) => {
    const options = {
      root: null, // Obserwowany obszar (null oznacza viewport)
      rootMargin: '0px', // Marginesy obserwowanego obszaru
      threshold: 0.5, // Prog widoczności elementu (50% widoczności)
    };
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Rozpocznij odliczanie, gdy element jest widoczny
          counter(startValue, endValue, element, time, prefix, suffix);
          // Zatrzymaj obserwację, aby uniknąć ponownego uruchomienia odliczania
          observer.unobserve(element);
        }
      });
    }, options);
  
    // Rozpocznij obserwację elementu
    observer.observe(element);
  };
  
  // Pobranie elementów
  const counter1 = document.querySelector(".counter-1");
  const counter2 = document.querySelector(".counter-2");
  const counter3 = document.querySelector(".counter-3");
  
  // Przykład użycia
  startCounterWhenVisible(counter1, 0, 10, 100, '', '');
  startCounterWhenVisible(counter2, 0, 300, 5, '<', '');
  startCounterWhenVisible(counter3, 0, 100, 50, '', '%');