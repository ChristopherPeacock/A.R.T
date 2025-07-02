<template>
  <section id="cta-section" class="py-12 light: bg-gray-900 h-96">
    <div class="container mx-auto text-center max-w-3xl px-4 py-6">
      <h2 class="cta-title text-3xl font-extrabold mb-4">
        Ready to Transform Your Risk Management?
      </h2>
      <p class="cta-subtitle text-lg mb-8">
        Join organizations using <span class="highlight font-semibold text-blue-600">Invenode</span> to build resilient operations.
      </p>
      <div class="cta-buttons flex justify-center gap-4">
        <a href="/trial" title="Start Free Trial" class="btn btn-primary px-6 py-3 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition">
          Start Free Trial
        </a>
        <a href="/contact" title="Contact an Expert" class="btn btn-secondary px-6 py-3 rounded-md bg-gray-300 text-gray-800 hover:bg-gray-400 transition">
          Contact an Expert
        </a>
      </div>
    </div>
    <section class="mt-25">
    <div class="light: text-white dark: text-grey-900">
        <p>This will be traveling across the page.</p>
    </div>
  </section>
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
  margin: auto;
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
