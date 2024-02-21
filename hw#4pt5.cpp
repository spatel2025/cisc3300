const cats = [
{ name: &#39;Charlie&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Lily&#39;, adoptionStatus: &#39;not-available&#39; },
{ name: &#39;Coco&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Oreo&#39;, adoptionStatus: &#39;not-available&#39; },
{ name: &#39;Luna&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Milo&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Lola&#39;, adoptionStatus: &#39;not-available&#39; },
{ name: &#39;Leo&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Willow&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Bella&#39;, adoptionStatus: &#39;not-available&#39; },
{ name: &#39;Max&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Cleo&#39;, adoptionStatus: &#39;available&#39; },
{ name: &#39;Lucy&#39;, adoptionStatus: &#39;not-available&#39; },

{ name: &#39;Daisy&#39;, adoptionStatus: &#39;available&#39; },
];
// Result array for names of cats available for adoption
let resultArray = [];
// Loop through the cats array
cats.forEach(cat =&gt; {
if (cat.adoptionStatus === &#39;available&#39;) {
// Add the cat&#39;s name to the result array if available
resultArray.push(cat.name);
}
});
// Create a sentence about the newly adopted cats
let adoptionSentence = &quot;I have adopted the following cats: &quot; + resultArray.join(&#39;, &#39;) + &quot;.&quot;;
console.log(adoptionSentence);

