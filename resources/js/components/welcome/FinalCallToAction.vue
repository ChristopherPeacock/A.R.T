<script setup>
import airbusLogo from '@/assets/airbusgroup_logo.jpeg'
import alacrity from '@/assets/alacrity_foundation_logo.jpeg'
import national_Highways from '@/assets/national_highways_logo.jpeg'
import kyndryl from '@/assets/kyndryl_logo.jpeg'
import cardiffUni from '@/assets/cardiff.jpeg'
import thales from '@/assets/thales_logo.jpeg'
import wazhoo from '@/assets/wahoo.jpeg'


const supportPictures = [
    {
        id: 1,
        companyName: 'Airbus Group',
        picture: airbusLogo
    },
    {
        id: 2,
        companyName: 'Alacrity Foundation',
        picture: alacrity
    },
    {
        id: 3,
        companyName: 'National Highways',
        picture: national_Highways
    },
    {
        id: 4,
        companyName: 'Kyndry',
        picture: kyndryl
    },
    {
        id: 5,
        companyName: 'Cardiff University',
        picture: cardiffUni
    },
    {
        id: 6,
        companyName: 'Thales',
        picture: thales
    },
    {
        id: 7,
        companyName: 'wahoo-services',
        picture: wazhoo
    }


]
</script>

<template>
  <section id="cta-section" class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto text-center max-w-3xl px-4 py-6">
      <h2 class="cta-title text-3xl font-extrabold mb-4">
        Ready to Transform Your Risk Management?
      </h2>
      <p class="cta-subtitle text-lg mb-8">
        Join organizations using <span class="highlight font-semibold text-blue-600">Invenode</span> to build resilient operations.
      </p>
      <div class="cta-buttons flex justify-center gap-4 flex-wrap">
        <a href="/trial" title="Start Free Trial" class="btn btn-primary px-6 py-3 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition">
          Start Free Trial
        </a>
        <a href="/contact" title="Contact an Expert" class="btn btn-secondary px-6 py-3 rounded-md bg-gray-300 text-gray-800 hover:bg-gray-400 transition">
          Contact an Expert
        </a>
      </div>
    </div>

    <!-- Logo Section -->
    <div class="bg-gray-900 py-40">
      <div class="container mx-auto flex flex-wrap justify-between items-center gap-8">
        <div
          v-for="company in supportPictures"
          :key="company.id"
          class="flex flex-col items-center max-w-[150px]"
        >
          <img :src="company.picture" :alt="company.companyName" class="h-28 object-contain mb-2" />
          <span class="text-sm text-center mt-2 font-bold">{{ company.companyName }}</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <!-- Company Info -->
        <div>
          <h3 class="text-xl font-semibold mb-6">About Us</h3>
          <p class="text-gray-300 mb-4">
            We are a leading company providing innovative solutions to help businesses grow and succeed in today's competitive market.
          </p>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
              <!-- Twitter Icon -->
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M22.46 6c-.77.35-1.6.58-2.46.69..." />
              </svg>
            </a>
            <a href="https://www.linkedin.com/company/invenode/" class="text-gray-400 hover:text-white transition-colors">
              <!-- LinkedIn Icon -->
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0..." />
              </svg>
            </a>
          </div>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-xl font-semibold mb-6">Services</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Web Development</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Mobile App Development</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Digital Marketing</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Cloud Solutions</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Consulting</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Technical Support</a></li>
          </ul>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-xl font-semibold mb-6">Quick Links</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Portfolio</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Blog</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Careers</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Support</a></li>
          </ul>
        </div>

        <!-- Contact Details -->
        <div>
          <h3 class="text-xl font-semibold mb-6">Contact Details</h3>
          <div class="space-y-4 text-gray-300 text-sm">
            <p><strong>Address:</strong><br>Alacrity House, Moderator Wharf, Kingsway, Newport, NP20 1HG, United Kingdom</p>
            <p><strong>Phone:</strong><br>+44 (0) 1633 123456</p>
            <p><strong>Email:</strong><br>info@company.com</p>
            <p><strong>Hours:</strong><br>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat - Sun: Closed</p>
          </div>
        </div>
      </div>

      <!-- Map -->
      <div class="mb-12">
        <h3 class="text-xl font-semibold mb-6">Find Us</h3>
        <div class="rounded-lg overflow-hidden shadow-lg">
          <iframe
            src="https://maps.google.com/maps?q=Alacrity+House,+Moderator+Wharf,+Kingsway,+Newport,+NP20+1HG,+UK&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%" height="400" style="border:0;" allowfullscreen loading="lazy" title="Office Location Map">
          </iframe>
        </div>
      </div>

      <!-- Bottom Footer -->
      <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
        <p>© 2025 Invenode. All rights reserved.</p>
        <div class="flex space-x-6 mt-4 md:mt-0">
          <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
          <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
          <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>
</template>




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
