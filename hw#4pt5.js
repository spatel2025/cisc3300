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
let resultArray = [];
cats.forEach(cat =&gt; {
if (cat.adoptionStatus === &#39;available&#39;) {
resultArray.push(cat.name);
}
});
lt adoptionSentence = &quot;I have adopted the following cats: &quot; + resultArray.join(&#39;, &#39;) + &quot;.&quot;;
console.log(adoptionSentence);
