<div class="bg-white p-6 rounded shadow space-y-4">

<input type="text"
       name="title"
       placeholder="Title"
       value="{{ old('title', $article->title ?? '') }}"
       class="w-full border p-2 rounded">

<textarea name="content"
          rows="10"
          class="w-full border p-2 rounded"
          placeholder="Content">{{ old('content', $article->content ?? '') }}</textarea>

<select name="category_id"
        class="w-full border p-2 rounded">

@foreach($categories as $category)
<option value="{{ $category->id }}"
@selected(old('category_id', $article->category_id ?? '') == $category->id)>
{{ $category->name }}
</option>
@endforeach

</select>

<select name="status"
        class="w-full border p-2 rounded">

<option value="draft"
@selected(old('status', $article->status ?? '')=='draft')>
Draft
</option>

<option value="published"
@selected(old('status', $article->status ?? '')=='published')>
Published
</option>

</select>

<button class="bg-blue-600 text-white px-5 py-2 rounded">
Save Article
</button>

</div>