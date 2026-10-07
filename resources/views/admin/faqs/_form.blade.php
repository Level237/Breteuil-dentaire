<div class="admin-field">
    <label for="category">Catégorie</label>
    <input id="category" type="text" name="category" value="{{ old('category', $faq->category ?? \App\Models\Faq::DEFAULT_CATEGORY) }}" required maxlength="120" list="faq-categories" placeholder="Ex. Implant dentaire">
    <datalist id="faq-categories">
        @foreach ($categories as $category)
            <option value="{{ $category }}"></option>
        @endforeach
    </datalist>
    <p class="admin-help">Les questions d’une même catégorie sont regroupées sur la page publique.</p>
    @error('category')
        <p class="admin-error">{{ $message }}</p>
    @enderror
</div>

<div class="admin-field">
    <label for="question">Question</label>
    <input id="question" type="text" name="question" value="{{ old('question', $faq->question ?? '') }}" required maxlength="255" placeholder="Ex. Qu’est-ce qu’un implant dentaire ?">
    @error('question')
        <p class="admin-error">{{ $message }}</p>
    @enderror
</div>

<div class="admin-field">
    <label for="answer">Réponse</label>
    <textarea id="answer" name="answer" rows="8" class="admin-textarea" required maxlength="5000" placeholder="Réponse affichée dans l’accordéon public...">{{ old('answer', $faq->answer ?? '') }}</textarea>
    @error('answer')
        <p class="admin-error">{{ $message }}</p>
    @enderror
</div>

<div class="admin-field">
    <label for="sort_order">Ordre d’affichage</label>
    <input id="sort_order" type="number" name="sort_order" value="{{ old('sort_order', $faq->sort_order ?? 0) }}" min="0" max="9999">
    @error('sort_order')
        <p class="admin-error">{{ $message }}</p>
    @enderror
</div>

<div class="admin-check">
    <input id="is_published" type="checkbox" name="is_published" value="1" {{ old('is_published', $faq->is_published ?? true) ? 'checked' : '' }}>
    <label for="is_published">Afficher cette question sur le site public</label>
</div>
