export default defineNuxtPlugin((nuxtApp) => {
    const title = useState('pageTitle', () => '');
    const discription = useState("pagediscription", () => "");
  
    nuxtApp.provide('setTitle', (newTitle) => {
      title.value = newTitle;
    });

    nuxtApp.provide("setDiscription", (newDiscription) => {
      discription.value = newDiscription;
    });
    
    useHead(() => ({
      title: title.value ? `${title.value} | Allancoding Games` : 'Allancoding Games',
      meta: [
        { property: 'og:title', content: title.value ? `${title.value} | Allancoding Games` : 'Allancoding Games' },
        { property: "og:description", content: discription.value || 'My games site!' },
        { name: "description", content: discription.value || 'My games site!' },
      ]
    }));
});