
<form method="post" action="#">
    <div class="relative z-0 w-full mb-10 group">
        <div class="relative z-0 w-full mb-10 group">
            <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-secondaryColor peer" placeholder=" " required />
            <label for="name" class="peer-focus:font-medium absolute text-sm text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondaryColor  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Imię</label>
        </div>
        
      </div>
    <div class="relative z-0 w-full mb-10 group">
        <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-secondaryColor peer" placeholder=" " required />
        <label for="email" class="peer-focus:font-medium absolute text-sm text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondaryColor  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
    </div>
   
   
    
    <div class="relative z-0 w-full mb-10 group">
      <div class="relative z-0 w-full mb-10 group">
          <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-secondaryColor peer" placeholder=" "/>
          <label for="phone" class="peer-focus:font-medium absolute text-sm text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondaryColor  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numer Telefonu</label>
      </div>
     
    </div>
    <div class="relative z-0 w-full mb-12 group">
      <div class="relative z-0 w-full mb-10 group">
        
        <textarea id="message" name="message" rows="8" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-secondaryColor peer" placeholder=" "></textarea>
        <label for="message" class="peer-focus:font-medium absolute text-sm text-white  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-secondaryColor  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">W czym możemy Ci pomóc?</label>
      </div>
     
    

    </div>
    <x-buttons.submit>Wyślij</x-buttons.submit>
  </form>
  