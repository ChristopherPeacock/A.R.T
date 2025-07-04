<script setup>
import { ref, computed, onBeforeUnmount } from 'vue'
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Underline from '@tiptap/extension-underline'
import Link from '@tiptap/extension-link'
import Placeholder from '@tiptap/extension-placeholder'
import CharacterCount from '@tiptap/extension-character-count'
import AppLayout from '@/layouts/AppLayout.vue'

const editor = useEditor({
  extensions: [
    StarterKit,
    Underline,
    Link.configure({ openOnClick: false }),
    Placeholder.configure({ placeholder: 'Start typing your blog...' }),
    CharacterCount.configure(),
  ],
  content: '<p>Write your content here...</p>',
})

const getCharacterCount = computed(() => {
  if (!editor.value) return 0
  return editor.value.storage.characterCount?.characters() || 0
})

onBeforeUnmount(() => {
  editor.value?.destroy()
})

</script>

<template>
  <AppLayout>
    <div class="editor-container">
      <EditorContent :editor="editor" />
      <div class="character-count">
        Characters: {{ getCharacterCount }}
      </div>
    </div>
  </AppLayout>
</template>



<style scoped>
.editor-container {
  background-color: white;
  padding: 1rem;
  min-height: 300px;
  border: 1px solid #d1d5db;
  border-radius: 0.5rem;
}

.dark .editor-container {
  background-color: black;
  color: #f9fafb;
  border-color: #374151;
}

.ProseMirror:focus {
  outline: none;
}

.character-count {
  margin-top: 0.5rem;
  font-size: 0.9rem;
  color: gray;
}
</style>
