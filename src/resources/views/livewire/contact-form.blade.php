<div class="contact-form-wrap">
    @if(session('success'))
        <div class="contact-feedback contact-feedback--success" role="status" aria-live="polite">
            <strong>✓ {{ session('success') }}</strong>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="contact-form">
        <div class="contact-grid">
            <div class="contact-field">
                <label for="name" class="contact-label">Nama Lengkap</label>
                <input
                    type="text"
                    id="name"
                    wire:model.defer="name"
                    placeholder="Siapa nama Anda?"
                    required
                    class="contact-input"
                >
                @error('name')
                    <p class="contact-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="contact-field">
                <label for="email" class="contact-label">Email</label>
                <input
                    type="email"
                    id="email"
                    wire:model.defer="email"
                    placeholder="Email Anda"
                    required
                    class="contact-input"
                >
                @error('email')
                    <p class="contact-error">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="contact-field contact-field--message">
            <label for="message" class="contact-label">Pesan</label>
            <textarea
                id="message"
                wire:model.defer="message"
                rows="8"
                placeholder="Ceritakan tentang project atau topik yang ingin Anda diskusikan..."
                required
                class="contact-input contact-textarea"
            ></textarea>
            @error('message')
                <p class="contact-error">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="contact-submit" wire:loading.attr="disabled">
            <span wire:loading.remove wire:target="submit">Kirim Pesan Sekarang</span>
            <span wire:loading wire:target="submit">Mengirim...</span>
        </button>
    </form>

    <style>
        .contact-form-wrap {
            width: 100%;
            max-width: 980px;
            margin: 3rem auto 0;
        }

        .contact-form-wrap .contact-feedback {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .contact-form-wrap .contact-feedback--success {
            background: #44aa44;
            color: #fff;
        }

        .contact-form {
            width: 100%;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .contact-field {
            margin-bottom: 0;
        }

        .contact-field--message {
            margin-bottom: 1.75rem;
        }

        .contact-label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 700;
            color: #fff;
            font-size: 1rem;
        }

        .contact-input {
            width: 100%;
            min-height: 4.5rem;
            padding: 1.25rem 1.5rem;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            color: #fff;
            font-family: inherit;
            font-size: 1.05rem;
            line-height: 1.5;
            transition: border-color 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
            outline: none;
        }

        .contact-input:focus {
            background: rgba(255, 255, 255, 0.09);
            border-color: rgba(100, 200, 255, 0.65);
            box-shadow: 0 0 0 4px rgba(100, 200, 255, 0.12);
        }

        .contact-textarea {
            min-height: 190px;
            resize: vertical;
        }

        .contact-submit {
            width: 100%;
            min-height: 4.6rem;
            padding: 1.2rem 2rem;
            background: linear-gradient(135deg, #7ad2ff 0%, #4aa8ff 100%);
            color: #06111f;
            font-weight: 800;
            font-size: 1.08rem;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            box-shadow: 0 10px 24px rgba(74, 168, 255, 0.24);
            transition: transform 0.2s ease, box-shadow 0.2s ease, filter 0.2s ease;
        }

        .contact-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 36px rgba(74, 168, 255, 0.42);
            filter: brightness(1.03);
        }

        .contact-submit:active {
            transform: translateY(0);
        }

        .contact-submit:disabled {
            cursor: wait;
            opacity: 0.85;
            transform: none;
        }

        .contact-error {
            color: #ff8d8d;
            font-size: 0.95rem;
            margin-top: 0.6rem;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }

        @media (max-width: 768px) {
            .contact-form {
                padding: 1.5rem;
                border-radius: 14px;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .contact-label {
                font-size: 1rem;
            }

            .contact-input {
                font-size: 1rem;
                min-height: 3.6rem;
            }

            .contact-textarea {
                min-height: 180px;
            }

            .contact-submit {
                padding: 1.15rem 1.5rem;
                font-size: 1.05rem;
            }
        }
    </style>
</div>