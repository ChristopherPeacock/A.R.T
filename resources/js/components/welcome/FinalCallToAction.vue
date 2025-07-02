<script setup>
import airbusLogo from '@/assets/airbusgroup_logo.jpeg'
import alacrity from '@/assets/alacrity_foundation_logo.jpeg'
import national_Highways from '@/assets/national_highways_logo.jpeg'
import kyndryl from '@/assets/kyndryl_logo.jpeg'
import cardiffUni from '@/assets/cardiff.jpeg'
import thales from '@/assets/thales_logo.jpeg'
import wazhoo from '@/assets/wazoo-services.jpeg'


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
        companyName: 'wazoo-services',
        picture: wazhoo
    }


]
</script>

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
        <div class="light: bg-gray-900">
            <div class="flex flex-row flex-wrap items-center flex justify-around margin-auto">
                <div
                    v-for="company in supportPictures"
                :key="company.id"
                class="flex flex-col dark:text-white dark:text-grey-900 justify-between mt-20 mb-20"
            >
                    <img :src="company.picture" :alt="company.companyName" class="h-40 object-contain mb-2 " />
                    <span class="text-sm text-center mt-5 font-bold light: text-white">{{ company.companyName }}</span>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <h3 class="text-xl font-semibold mb-6">About Us</h3>
                <p class="text-gray-300 mb-4">
                    We are a leading company providing innovative solutions to help businesses grow and succeed in today's competitive market.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Services -->
            <div class="lg:col-span-1">
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
            <div class="lg:col-span-1">
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
            <div class="lg:col-span-1">
                <h3 class="text-xl font-semibold mb-6">Contact Details</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-400 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-medium">Address</p>
                            <p class="text-gray-300 text-sm">
                                Alacrity House<br>
                                Moderator Wharf, Kingsway<br>
                                Newport, NP20 1HG<br>
                                United Kingdom
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-400 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <div>
                            <p class="font-medium">Phone</p>
                            <p class="text-gray-300 text-sm">+44 (0) 1633 123456</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-400 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        <div>
                            <p class="font-medium">Email</p>
                            <p class="text-gray-300 text-sm">info@company.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-blue-400 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <p class="font-medium">Hours</p>
                            <p class="text-gray-300 text-sm">
                                Mon - Fri: 9:00 AM - 6:00 PM<br>
                                Sat - Sun: Closed
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mb-12">
            <h3 class="text-xl font-semibold mb-6">Find Us</h3>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <iframe
                    src="https://maps.google.com/maps?q=Alacrity+House,+Moderator+Wharf,+Kingsway,+Newport,+NP20+1HG,+UK&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen="true"
                    loading="lazy"
                    title="Office Location Map">
                </iframe>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-700 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © 2025 Invenode. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors">Cookie Policy</a>
                </div>
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
