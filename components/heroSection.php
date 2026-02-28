<div class="mx-auto max-w-screen-lg w-full px-4 flex flex-col items-center">
    <div class="mb-14">
        <img src="https://avatars.githubusercontent.com/0xviny" alt="Minha foto de perfil" class="rounded-full w-40 h-40 mb-4 p-2 ring ring-inset-1 ring-blue-400">
    </div>

    <div class="space-y-6">
        <h1 class="text-[22px] font-inconsolata text-gray-300">Hello World! Meu nome é <span class="text-blue-400">Vinicius Gabriel</span> e sou</h1>
        <p class="text-7xl font-asap font-bold">Desenvolvedor PHP</p>
        <p class="text-base md:text-lg text-gray-400 font-maven-pro max-w-[950px] mx-auto text-center leading-relaxed antialiased font-light">
            Transformo necessidades em aplicações reais, envolventes e funcionais. Desenvolvo sistemas através da <br class="hidden md:block" />
            minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
        </p>
    </div>

    <div class="text-black font-semibold flex flex-wrap justify-center gap-3 mt-10">
        <?php foreach ($stacks as $stack): ?>
            <span class="bg-[<?= $stack["color"] ?>] py-1 px-4 rounded-full"><?= $stack["name"] ?></span>
        <?php endforeach; ?>
    </div>
</div>