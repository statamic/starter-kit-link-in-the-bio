<ui-empty-state-menu
    heading="Welcome to Link in the Bio!"
    subheading="Let's get this thing going. Your followers are waiting."
>
    <ui-empty-state-item
        href="{{ cp_route('collections.entries.edit', ['pages', 'home#theme']) }}"
        icon="edit-paint-palette"
        heading="Tweak your link page theme"
        description="Customize colors, background images, and other settings to make the page more uniquely you!"
    ></ui-empty-state-item>

    <ui-empty-state-item
        href="{{ cp_route('collections.entries.edit', ['pages', 'home#theme']) }}"
        icon="earth"
        heading="Set your Social Links"
        description="Customize colors, social media links, and other settings to make the site more uniquely you!"
    ></ui-empty-state-item>

    <ui-empty-state-item
        href="{{ cp_route('collections.entries.edit', ['pages', 'home']) }}"
        icon="insert-link"
        heading="Manage Your Links"
        description="Set up those links. Launch this site. Put the link to it your bio. Win the internet."
    ></ui-empty-state-item>
</ui-empty-state-menu>