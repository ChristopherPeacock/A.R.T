<template>
  <section class="cta-section" id="cta-section">
    <div class="container">
      <h2 class="cta-title">Ready to Transform Your Risk Management?</h2>
      <p class="cta-subtitle">
        Join organizations using <span class="highlight">Invenode</span> to build resilient operations. Start your free trial today.
      </p>
      <div class="cta-buttons">
        <a href="/trial" class="btn btn-primary" title="Start Free Trial">Start Free Trial</a>
        <a href="/contact" class="btn btn-secondary" title="Contact an Expert">Contact an Expert</a>
      </div>
    </div>
  </section>
</template>

<script setup>
// No JavaScript needed for this simple CTA
</script>

<style scoped>
.cta-section {
  background: #f9fafb;
  padding: 4rem 1rem;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #1f2937;
}

.cta-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  color: #111827;
}

.cta-subtitle {
  font-size: 1.125rem;
  margin-bottom: 2rem;
  color: #4b5563;
}

.highlight {
  color: #16a34a;
  font-weight: 600;
}

.cta-buttons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
}

.btn {
  padding: 0.75rem 2rem;
  border-radius: 0.375rem;
  font-weight: 600;
  text-decoration: none;
  transition: background-color 0.3s ease, color 0.3s ease;
  cursor: pointer;
  display: inline-block;
  min-width: 140px;
  text-align: center;
  user-select: none;
}

.btn-primary {
  background-color: #16a34a;
  color: white;
  border: none;
}

.btn-primary:hover,
.btn-primary:focus-visible {
  background-color: #15803d;
  outline: none;
}

.btn-secondary {
  background-color: transparent;
  color: #16a34a;
  border: 2px solid #16a34a;
}

.btn-secondary:hover,
.btn-secondary:focus-visible {
  background-color: #16a34a;
  color: white;
  outline: none;
}

@media (prefers-color-scheme: dark) {
  .cta-section {
    background: #0f172a;
    color: #d1d5db;
  }
  .cta-title {
    color: #d1d5db;
  }
  .cta-subtitle {
    color: #9ca3af;
  }
  .highlight {
    color: #22c55e;
  }
  .btn-primary {
    background-color: #22c55e;
    color: #0f172a;
  }
  .btn-primary:hover,
  .btn-primary:focus-visible {
    background-color: #16a34a;
    color: white;
  }
  .btn-secondary {
    color: #22c55e;
    border-color: #22c55e;
  }
  .btn-secondary:hover,
  .btn-secondary:focus-visible {
    background-color: #22c55e;
    color: #0f172a;
  }
}
</style>
