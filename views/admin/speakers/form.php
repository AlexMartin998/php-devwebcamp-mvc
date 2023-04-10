<fieldset class="form__fieldset">
    <legend class="form__legend">Información Personal</legend>

    <div class="form__field">
        <label for="name" class="form__label">Nombre</label>
        <input
            type="text"
            class="form__input"
            id="name"
            name="name"
            placeholder="Nombre Ponente"
            value="<?php echo $speaker->name ?? '' ?>"
        >
    </div>

    <div class="form__field">
        <label for="last_name" class="form__label">Apellido</label>
        <input
            type="text"
            class="form__input"
            id="last_name"
            name="last_name"
            placeholder="Apellido Ponente"
            value="<?php echo $speaker->last_name ?? '' ?>"
        >
    </div>

    <div class="form__field">
        <label for="city" class="form__label">Ciudad</label>
        <input
            type="text"
            class="form__input"
            id="city"
            name="city"
            placeholder="Ciudad"
            value="<?php echo $speaker->city ?? '' ?>"
        >
    </div>

    <div class="form__field">
        <label for="country" class="form__label">País</label>
        <input
            type="text"
            class="form__input"
            id="country"
            name="country"
            placeholder="País"
            value="<?php echo $speaker->country ?? '' ?>"
        >
    </div>

    <div class="form__field">
        <label for="image" class="form__label">Imagen</label>
        <input
            type="file"
            class="form__input form__input--file"
            id="image"
            name="image"
        >
    </div>
</fieldset>



<fieldset class="form__fieldset">
    <legend class="form__legend">Información Extra</legend>

    <div class="form__field">
        <label for="tags_input" class="form__label">Áreas de Experiencia (separadas por coma)</label>
        <input
            type="text"
            class="form__input"
            id="tags_input"
            placeholder="Ej. Node.js, PHP, TypeScript, Next.js, Nest.js"
        >

        <div class="form__container--list">
            <ul id="tags" class="form__list"></ul>
        </div>
        <input type="hidden" name="tags" value="<?php echo $speaker->tags ?? ''; ?>">
    </div>
</fieldset>



<fieldset class="form__fieldset">
    <legend class="form__legend">Redes Sociales</legend>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-facebook"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[facebook]"
            placeholder="Facebook"
            value="<?php echo $speaker->facebook ?? '' ?>"
            >
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-twitter"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[twitter]"
            placeholder="Twitter"
            value="<?php echo $speaker->twitter ?? '' ?>"
            >
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-youtube"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[youtube]"
            placeholder="YouTube"
            value="<?php echo $speaker->youtube ?? '' ?>"
            >
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-instagram"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[instagram]"
            placeholder="Instagram"
            value="<?php echo $speaker->instagram ?? '' ?>"
            >
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-tiktok"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[tiktok]"
            placeholder="Tiktok"
            value="<?php echo $speaker->tiktok ?? '' ?>"
            >
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-github"></i>
            </div>

            <input
            type="text"
            class="form__input--socials"
            name="networks[github]"
            placeholder="GitHub"
            value="<?php echo $speaker->github ?? '' ?>"
            >
        </div>
    </div>


</fieldset>