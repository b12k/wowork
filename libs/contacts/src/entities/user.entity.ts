import { z } from 'zod';

export const UserEntity = z.object({
  id: z.number().positive(),
  email: z.string().email(),
  firstName: z.string(),
  lastName: z.string(),
  phone: z.string(),
  fullName: z.string().nullable(),
  banana: z.string().nullable(),
});

export type TUserEntity = z.infer<typeof UserEntity>;
